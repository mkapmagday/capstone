<?php

namespace App\Http\Controllers;

use App\Models\DocumentList;
use App\Models\DocumentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResidentDocumentRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $docres = DocumentRequest::paginate(5);
        $doclist = DocumentList::paginate(5);
        $doclist1 = DocumentList::all();
        return view('resident.docres.docreslist',compact('docres','doclist','doclist1'));
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
        $user_id = Auth::id();
        $documentlist_id = $request->input('document_list');
        $lname = $request->input('lname');
        $fname = $request->input('fname');
        $mname = $request->input('mname');
        $pnum = $request->input('pnum');

        $bdate = $request->input('bdate');
        $years = $request->input('years');
        $months = $request->input('months');
        $municipality = $request->input('municipality');
        $vdate = $request->input('vdate');
        $age = $request->input('age');
        $representative = $request->input('representative');
        $relation = $request->input('relation');
        $address = $request->input('address');
        $purpose = $request->input('purpose');
        $reason = $request->input('reason');
        //dd($request->input());

        DocumentRequest::create([
            'user_id' => Auth::id(),
            'document_id' => $documentlist_id,
            'lname' => $lname,
            'fname' => $fname,
            'mname' => $mname,
            'pnum' => $pnum,

            'bdate' => $bdate,
            'years' => $years,
            'months' => $months,
            'municipality' => $municipality,
            'vdate' => $vdate,
            'age' => $age,
            'representative' => $representative,
            'relation' => $relation,
            'address' => $address,
            'purpose' => $purpose,
            'reason' => $reason,

        ]);
        return redirect()->route('residentdocres.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id = Auth::id();
        $docres = DocumentRequest::paginate(5);
        $doclist = DocumentList::paginate(5);
        $doclist1 = DocumentList::all();
        return view('resident.docres.docresstatus',compact('docres','doclist','doclist1',));
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
