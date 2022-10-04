<?php

namespace App\Http\Controllers;

use App\Models\DocumentList;
use App\Models\DocumentRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use PDF;


class AdminPDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatePDF($id)
    {
        $docres = DocumentRequest::find($id);
        $date = Carbon::now();
        $month = $date->format('F');
        $user = User::all();
        $role = Role::all();
        if($docres->document_id == 1){
            $pdf = PDF::loadView('document\templates\certification', compact('docres','date','month','user','role'));
        }
        else if($docres->document_id == 2){
            $pdf = PDF::loadView('document\templates\certificationstipend', compact('docres','date','month','user','role'));
        }
        else if($docres->document_id == 3){
            $pdf = PDF::loadView('document\templates\indigency', compact('docres','date','month','user','role'));
        }
        else if($docres->document_id == 4){
            $pdf = PDF::loadView('document\templates\JobSeeker', compact('docres','date','month','user','role'));
        }
        else if($docres->document_id == 5){
            $pdf = PDF::loadView('document\templates\CertificationStipend', compact('docres','date','month','user','role'));
        }
        else if($docres->document_id == 6){
            $pdf = PDF::loadView('document\templates\Oneness', compact('docres','date','month','user','role'));
        }
        return $pdf->download('BRGY_DOCUMENTS.pdf');
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docres = DocumentRequest::find($id);
        $doclist = DocumentList::find($id);
        $date = Carbon::now();
        $month = $date->format('F');
        $user = User::all();
        $role = Role::all();
        //dd($docres->document_id);
        if($docres->document_id == 1){
            return view('document\templates\certification', compact('docres','date','month','user','role'));
        }
        else if($docres->document_id == 2){
            return view('document\templates\certificationstipend', compact('docres','date','month','user','role'));
        }
        else if($docres->document_id == 3){
            return view('document\templates\indigency', compact('docres','date','month','user','role'));
        }
        else if($docres->document_id == 4){
            return view('document\templates\JobSeeker', compact('docres','date','month','user','role'));
        }
        else if($docres->document_id == 5){
            return view('document\templates\CertificationStipend', compact('docres','date','month','user','role'));
        }
        else if($docres->document_id == 6){
            return view('document\templates\Oneness', compact('docres','date','month','user','role'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
