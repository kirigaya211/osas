<?php

namespace App\Livewire;

use App\Models\PendingList;
use App\Models\DeniedList;
use App\Models\AcceptedList;
use Livewire\Component;

class ColumnChart extends Component
{

    public function getMonthlyCounts($model)
    {
        $months = [
            6 => "June",
            7 => "July",
            8 => "August",
            9 => "September",
            10 => "October",
            11 => "November",
            12 => "December"
        ];

        $year = date('Y');
        $data = [];
        
        foreach ($months as $monthNumber => $monthName) {
            $data[$monthName] = $model::whereMonth('created_at', '=', $monthNumber)
                                      ->whereYear('created_at', '=', $year)
                                      ->count();
        }

        return $data;
    }

    public function render()
    {
        $pending = $this->getMonthlyCounts(PendingList::class);
        $denied = $this->getMonthlyCounts(DeniedList::class);
        $accepted = $this->getMonthlyCounts(AcceptedList::class);

        return view('livewire.column-chart', [
            'pending' => $pending,
            'denied' => $denied,
            'accepted' => $accepted,
        ]);
    }
}