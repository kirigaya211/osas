<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ApplicationStatusList;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $currentPending = ApplicationStatusList::where('StatusType', 1)->count();
            $currentDenied = ApplicationStatusList::where('StatusType', 2)->count();
            $currentApproved = ApplicationStatusList::where('StatusType', 3)->count();
            view()->share([
                'currentPending' => $currentPending,
                'currentDenied' => $currentDenied,
                'currentApproved' => $currentApproved,
            ]);
        });
    }
}
