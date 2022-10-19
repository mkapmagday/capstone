<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Models\Residents;
use Illuminate\Http\Request;
use Excel;
use PhpParser\Node\Expr\Throw_;
use Throwable;

class AdminResidentsListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $residents = Residents::paginate(5);
        return view('admin.reslist.reslist',compact('residents'));
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
        $file = $request->file;
        $fname = $request->fname;

        Excel::import(new UsersImport, $file);



        return back();  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Residents  $residents
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $fname = $request->fname;
        $residents = Residents::where('fname', 'like' ,'%'.$fname.'%')
                    ->paginate(5)
                    ->appends(request()->query());


        return view('admin.reslist.ressearch',compact('residents','request','fname'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Residents  $residents
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $residents = Residents::paginate(10);
        $resident = Residents::find($id);
        return view('admin.reslist.resedit',compact('residents','resident'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Residents  $residents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Residents $residents, $id)
    {
        $resident = Residents::find($id);
        $input = $request->all();
        $resident->update($input);

        return redirect()->route('reslist.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Residents  $residents
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Residents::find($id)->delete();
    }
}
