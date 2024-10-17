<?php

namespace App\Listeners;

use App\Events\ApplicationInfoCreated;
use App\Models\PendingList;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\ApplicationStatusList;

class RelatedTableData
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ApplicationInfoCreated $event)
    {
        // \Log::info('ApplicationInfo type: ' . gettype($event->applicationInfo));
        // \Log::info('ApplicationInfo content: ' . print_r($event->applicationInfo, true));

        $applicationInfo = $event->applicationInfo;

        $applicationStatus = new ApplicationStatusList();
        $applicationStatus->ApplicationID = $applicationInfo->ApplicationID;
        $applicationStatus->StatusType = 1;
        $applicationStatus->save();

        $this->pendingStatus($applicationStatus);

    }

    public function pendingStatus(ApplicationStatusList $applicationStatus){

        $pendingApplication = new PendingList();
        $pendingApplication->StatusID = $applicationStatus->id;
        $pendingApplication->Feedback="";
        $pendingApplication->save();

    }
}
