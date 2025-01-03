<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $user = Auth::user();
        
        if ($user->email_verified == 1) {
            $request->session()->regenerate();

            $authUserRole = Auth::user()->role;

            if ($authUserRole == 1) {
                return redirect()->intended(route('dashboard.overview'));
            }elseif($authUserRole == 2){
                return redirect()->intended(route('dashboard.overview'));
            }elseif($authUserRole == 3){
                return redirect()->intended(route('organizationDoc'));
            }else{
                return redirect()->intended(route('landingpage'));
            }
        }
        Auth::logout();
        return redirect()->route('login')->with('error', 'Account denied access.');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
