<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataExportFile;


class DataExport extends Controller
{
   


   public function export_excel(Request $request){

      $fileType = $request->input('fileType');
      if($fileType == 'xlsx'){
         $extension = 'xlsx';
         $exportFormat =  \Maatwebsite\Excel\Excel::XLSX;
      }
      elseif($fileType == 'csv'){
         $extension = 'csv';
         $exportFormat =  \Maatwebsite\Excel\Excel::CSV;
      }
      elseif($fileType == 'xls'){
         $extension = 'xls';
         $exportFormat =  \Maatwebsite\Excel\Excel::XLS;
      }
      else{
         $extension = 'xlsx';
         $exportFormat =  \Maatwebsite\Excel\Excel::XLSX;
      }
      $filename = 'GenerateReport-'.date('d-m-y').'.'.$extension;

      $export = new DataExportFile($request);


        return Excel::download($export, $filename, $exportFormat);
   }
}
