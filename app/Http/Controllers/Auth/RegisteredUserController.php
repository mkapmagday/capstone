<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Residents;
use App\Models\User;
use App\Notifications\UserRegistrationNotification;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $message='';
        return view('auth.register',compact('message'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $isFnameExist = Residents::where('fname',$request->name)->count();
        $isEmailExist = Residents::where('fname',$request->name)
                                        ->where('email', NULL)
                                        ->get()
                                        ->count();
        $updateResident = Residents::where('fname',$request->name);
        $admin = User::find(2);

        if($isFnameExist){
            if($isEmailExist){

                $request->validate([
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'confirmed', Rules\Password::defaults()],
                ]);
        
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);

                $updateResident -> update([
                    'email' => $request->email,
                ]);

                
        
                event(new Registered($user));
                Notification::send($admin, new UserRegistrationNotification($request));
                Auth::login($user);
                return redirect(RouteServiceProvider::HOME);
                
            }
            else{
                return redirect()->back()->with([
                    'resident_not_found' => 'This Resident Has Already Registered an Account, If you are this resident please contact the barangay!!!.'
                ]);
            }
        
        }else{
            return redirect()->back()->with([
                'resident_not_found' => 'Your name is not in the list of residents for this barangay, Please contact an official
                for you to be registered.'
            ]);
        }

    
    }
}
