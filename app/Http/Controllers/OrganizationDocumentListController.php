<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\OrganizationDocumentList;
use Illuminate\Http\Request;

class OrganizationDocumentListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new OrganizationDocumentList();
        $data->OrganizationEmail = Auth::user()->email;
        $data->DocumentType = $request->type;


        $file  = $request->file;
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $request->file->move(public_path('DocumentFolder'), $fileName);

        $data->File = $fileName;

        $data->save();
        return redirect()->back();
    }
    public function download($file)
    {
        return response()->download(public_path('DocumentFolder/' . $file));
    }

    /**
     * Display the specified resource.
     */
    public function show($file)
    {
        $my_file = $file;
        return view("organization.viewDocs",compact('my_file'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrganizationDocumentList $organizationDocumentList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrganizationDocumentList $organizationDocumentList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrganizationDocumentList $organizationDocumentList)
    {
        //
    }

    public function viewDocument($file){
        return view("admin.organizationDocumentView",compact('file'));
    }
}
