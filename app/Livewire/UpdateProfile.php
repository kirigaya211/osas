<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UpdateProfile extends Component
{

    use WithFileUploads; 
    public $profile=""; 
    public function update()
    {
     
        $this->validate([
            'profile' => 'required|image|max:1024', 
        ]);

        $filename = time() . '.' . $this->profile->getClientOriginalExtension();
        $this->profile->move(public_path('ProfileFolder'), $filename);
        $user = User::find(Auth::user()->id);
        $user->profile = $filename;
        $user->save();

        $this->reset(['profile']);
        session()->flash('success', 'Profile updated successfully!');
    }

    public function render()
    {
        return view('livewire.update-profile')->layout('layouts.app');
    }
}
