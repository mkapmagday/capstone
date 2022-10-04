<?php

namespace App\Http\Controllers;

use App\Models\User;
use Notification;
Use App\Notifications\SendEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\Facades\Vonage;
use Illuminate\Notifications\Notification as NotificationsNotification;

class AdminSmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Vonage::message()->send([
            'to' => '639064370355',
            'from' => 'sender',
            'text' => 'sent'
        ]);
        echo "sent";
    }
    public function sendnotification(){
        $user=User::find(1);
        dd($user);
        $details=[
            'greeting' => 'Hi',
            'body' => 'body',
            'actiontext' => 'actiontext',
            'actionurl' => '/',
            'lastline' => 'lastline',
        ];
        Notification::send($user, new SendEmailNotification($details));
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
        //
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
