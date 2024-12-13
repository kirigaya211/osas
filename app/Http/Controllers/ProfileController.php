<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Organization;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'file' => 'required|image',
        ]);

        $filename = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('ProfileFolder'), $filename);
        $user = User::find(Auth::user()->id);
        $user->profile = $filename;
        $user->save();

        $organization = Organization::where('OrganizationEmail', Auth::user()->email)->first();
        if (!$organization) {
            return Redirect::back()->with('error', 'Organization not found!');
        }
        $organization->OrganizationLogo = $filename;
        $organization->save();

        return Redirect::back()->with('success', 'Profile updated successfully!');
    }
}
