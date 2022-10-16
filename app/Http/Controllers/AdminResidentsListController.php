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
        $residents = Residents::all();
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

        Excel::import(new UsersImport, $file);

        $fname = $request->fname;

        return back();  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Residents  $residents
     * @return \Illuminate\Http\Response
     */
    public function show(Residents $residents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Residents  $residents
     * @return \Illuminate\Http\Response
     */
    public function edit(Residents $residents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Residents  $residents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Residents $residents)
    {
        //
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
        return back();
    }
}
