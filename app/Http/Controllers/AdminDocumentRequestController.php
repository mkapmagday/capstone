<?php

namespace App\Http\Controllers;
use Illuminate\Notifications\Facades\Vonage;
use App\Models\DocumentList;
use App\Models\DocumentRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Notification;
Use App\Notifications\SendEmailNotification;


class AdminDocumentRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docres = DocumentRequest::paginate(5);
        $doclist = DocumentList::all();
        return view('admin.docres.docreslist',compact('docres','doclist'));
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
        return redirect()->route('docres.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $docname = $request->input('docname');
        $status = $request->input('status');
        $docres = DocumentRequest::where('document_id',$docname)
                                ->where('status',$status)->paginate(5);
        $doclist = DocumentList::all();
        return view('admin.docres.docreslist',compact('docres','doclist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docres = DocumentRequest::paginate(5);
        $doclist = DocumentList::paginate(5);
        $doclist1 = DocumentList::all();

        $docresupdate = DocumentRequest::find($id);
        return view('admin.docres.docresedit',compact('docres','doclist','doclist1','docresupdate'));
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
        $docres = DocumentRequest::paginate(10);
        $doclist = DocumentList::paginate(10);
        $doclist1 = DocumentList::all();
        $docresupdate = DocumentRequest::find($id);
        $user = User::find($docresupdate->user_id);
        $document = DocumentList::find($docresupdate->document_id);
       
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
        $status = $request->input('status');

        $docresupdate->update([
            'document_list' => $documentlist_id,
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
            'status' => $status
        ]);
        $details=[
            'greeting' => 'Hi '.$fname.' '.$lname,
            'body' => 'This is to update you about the status of your requested document: ',
            'did' => 'Document ID: '.$document->id,
            'dname' => 'Document Name: '.$document->document_name,
            'dstatus' =>'Document Status: '.$status,
            'lastline' => 'Note: Please bring an ID upon claiming.',
        ];
        Notification::send($user, new SendEmailNotification($details));

        try{
            Vonage::message()->send([
                'to' => $pnum,
                'from' => 'sender',
                'text' => 'from BRGY 386 this is to inform you about your document status: '.$status.' Thank you for using our website',             
            ]);
            return redirect()->route('docres.index','docres_id');

        }catch(\Vonage\Client\Exception\Request){
            return redirect()->route('docres.index','docres_id');

        }
        $docres_id = $docresupdate->document_id;
        return redirect()->route('docres.index','docres_id');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DocumentRequest::find($id)->delete();
        return back();
    }
}
