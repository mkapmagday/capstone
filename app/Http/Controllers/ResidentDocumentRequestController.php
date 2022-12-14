<?php

namespace App\Http\Controllers;

use App\Models\DocumentList;
use App\Models\DocumentRequest;
use App\Models\User;
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
        $user = User::find($user_id);
        $documentlist_id = $request->input('document_list');

        $municipality = $request->input('municipality');
        $vdate = $request->input('vdate');
        $representative = $request->input('representative');
        $relation = $request->input('relation');
        $purpose = $request->input('purpose');
        $reason = $request->input('reason');

        DocumentRequest::create([
            'user_id' => Auth::id(),
            'document_id' => $documentlist_id,
            'fname' => $user->name,
            'pnum' => $user->pnum,
            'bdate' => $user->bdate,
            'years' => $user->years,
            'months' => $user->months,
            'municipality' => $user->municipality,
            'address' => $user->address,
            'age' => $user->age,

            'vdate' => $vdate,
            'representative' => $representative,
            'relation' => $relation,
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
        $user = User::find(Auth::id());
        $doclist = DocumentList::all();
        $docres = DocumentRequest::where('user_id',Auth::id())->paginate(5);
        return view('resident.docres.docresstatus',compact('docres','doclist'));
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
