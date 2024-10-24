<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class UserManagement extends Component
{
    public $type = '';
    public $search = '';
    public $perPage = 5;
    public $userAccess = [];

    public function mount()
    {

        $users = User::all();
        foreach ($users as $user) {
            $this->userAccess[$user->id] = $user->email_verified;
        }
    }

    public function changeAccess($userID)
    {
        $user = User::find($userID);
        $user->email_verified = $this->userAccess[$userID];
        $user->save();
    }

    public function render()
    {
        $users = User::query()
            ->when($this->type !== '', function ($query) {
                return $query->where('role', $this->type);
            })
            ->search($this->search)
            ->paginate($this->perPage);

        return view('livewire.user-management', ['users' => $users]);
    }
}