<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Organization;

class PdfController extends Controller
{
   public function generatePdf($organizationID){

    $organization = Organization::where("OrganizationID", $organizationID)->first();

    $data = [
        'organization'=> $organization,
    ];


    $pdf = PDF::loadView('generate-product-pdf', $data)->setPaper('a4', 'landscape'); 
    return $pdf->download('users-lists.pdf');
   }
}
