<?php

namespace App\Livewire;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Calendar extends Component
{

    public function newEvent($title, $startDate, $endDate)
    {
        $validated = Validator::make(
            [
                'title' => $title,
                'start_time' => $startDate,
                'end_time' => $endDate,
            ],
            [
                'title' => 'required|min:1|max:40',
                'start_time' => 'required',
                'end_time' => 'required',
            ]
        )->validate();

        $event = Event::create(
            $validated
        );

        return $event->id;
    }

    public function updateEvent($id, $title, $startDate, $endDate)
    {
        $validated = Validator::make(
            [
                'start_time' => $startDate,
                'end_time' => $endDate,
            ],
            [
                'start_time' => 'required',
                'end_time' => 'required',
            ]
        )->validate();

        Event::findOrFail($id)->update($validated);
    }

    public function render()
    {
        
        $events = Event::all()->map(function ($event) {
            return [
                'id' => $event->id,
                'title' => $event->title,
                'start' => $event->start_time,
                'end' => $event->end_time,
            ];
        })->toArray(); 

      
    
        return view('livewire.calendar', [
            'events' => $events,  
        ]);
    }
    
}