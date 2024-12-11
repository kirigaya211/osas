<?php

namespace App\Livewire;

use Livewire\Component;

class UpdateProfile extends Component
{
    public $gwapo = "gwapo";

    public function update(){
        dd($this->gwapo);
    }
    public function render()
    {
        return view('livewire.update-profile',['gwapo'=>$this->gwapo])->extends('admin.dashboard');
    }
}
