<?php

namespace App\Exports;

// use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\WithHeadings;
// use Maatwebsite\Excel\Concerns\WithMapping;
use App\Models\ApplicationStatusList;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DataExportFile implements FromView
{
    protected $type;
    protected $status;
    protected $dateStart;
    protected $dateEnd;

    public function __construct(Request $request)
    {

        $this->type = $request->input('type');
        $this->status = $request->input('status');
        $this->dateStart = Carbon::parse($request->input('start'))->startOfDay()->format('Y-m-d H:i:s');
        $this->dateEnd = Carbon::parse($request->input('end'))->endOfDay()->format('Y-m-d H:i:s');
    }


    // public function collection()
    // {
    //     $query = ApplicationStatusList::whereBetween('created_at', [$this->dateStart, $this->dateEnd])
    //         ->with('application'); 


    //     if ($this->type !== 'all') {
    //         $query->whereHas('application', function ($q) {
    //             $q->where('Type', $this->type); 
    //         });
    //     }

    //     // Return the result of the query
    //     return $query->get();
    // }

    // public function map($row): array
    // {
    //     return [
    //         $row->ApplicationID, 
    //         $row->StatusID, 
    //         $row->StatusType, 
    //         $row->created_at, 
    //         $row->updated_at,
    //         $row->application->OrganizationName,
    //         $row->application->representativeName,
    //     ];
    // }

    // public function headings(): array
    // {
    //     return [
    //         'Application ID', 
    //         'Status ID', 
    //         'Status Type', 
    //         'created_at', 
    //         'updated_at',
    //         'Organization Name',
    //         'Representative Name',
    //     ];
    // }

    // /**
    // * @param mixed $row
    // * @return array
    // */


    public function view(): View
    {
        $query = ApplicationStatusList::whereBetween('created_at', [$this->dateStart, $this->dateEnd])
            ->with('application');

        if ($this->type !== 'all' && $this->status !== 'all') {
            $query->whereHas('application', function ($q) {
                $q->where('Type', $this->type);
            })->where('StatusType', $this->status);
        } else {
            if ($this->type !== 'all') {
                $query->whereHas('application', function ($q) {
                    $q->where('Type', $this->type);
                });
            }
            if ($this->status !== 'all') {
                $query->where('StatusType', $this->status);
            }
        }

        



        return view('export.export', [
            'datas' => $query->get(),
            'DateStart' => $this->dateStart,
            'DateEnd' => $this->dateEnd,
        ]);
    }

}
