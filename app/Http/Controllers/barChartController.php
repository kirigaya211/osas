<?php

namespace App\Http\Controllers;

use App\Models\ApplicationStatusList; // Assuming ApplicationStatusList is your model
use Illuminate\Http\Request;

class BarChartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch Pending Data
        $pendingData = ApplicationStatusList::selectRaw('DATE_FORMAT(created_at, "%M") as month, COUNT(*) as count')
            ->where('StatusType', 1)
            ->groupBy('month')
            ->orderBy('created_at')
            ->get();

        // Fetch Approved Data
        $approvedData = ApplicationStatusList::selectRaw('DATE_FORMAT(created_at, "%M") as month, COUNT(*) as count')
            ->where('StatusType', 2)
            ->groupBy('month')
            ->orderBy('created_at')
            ->get();

        // Fetch Denied Data
        $deniedData = ApplicationStatusList::selectRaw('DATE_FORMAT(created_at, "%M") as month, COUNT(*) as count')
            ->where('StatusType', 3)
            ->groupBy('month')
            ->orderBy('created_at')
            ->get();

        // Prepare the data in the format required by the chart
        $pendingFormattedData = $pendingData->map(function ($item) {
            return ['x' => $item->month, 'y' => $item->count];
        });

        $approvedFormattedData = $approvedData->map(function ($item) {
            return ['x' => $item->month, 'y' => $item->count];
        });

        $deniedFormattedData = $deniedData->map(function ($item) {
            return ['x' => $item->month, 'y' => $item->count];
        });

        // Return the data as JSON
        return response()->json([
            'pending' => $pendingFormattedData,
            'approved' => $approvedFormattedData,
            'denied' => $deniedFormattedData
        ]);
    }
}
