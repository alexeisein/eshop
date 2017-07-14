<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;

class AdminsController extends Controller
{
    // public function __construct()
    // {
    //    $this->middleware('auth');
    // }

    public function getSignup()
    {
    	return view('admin.signup');
    }

    public function postSignup(Request $request)
    {
    	$this->validate($request, [
            'name' => 'required|max:150|min:2',
    		'email' => 'required|unique:users',
    		'password' => 'required|min:6',
    		]);

    	$User = new User;
        $User->name = $request->input('name');
        $User->email = $request->input('email');
        $User->password = bcrypt($request->input('password'));
    	$User->save();

        Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]);

    	//session()->flash('success', 'Registration successful');
    	return redirect()->route('admin.dashboard');

    }

    public function getSignin()
    {
       return view('admin.signin');
    }

    public function postSignin(Request $request)
    {
       $this->validate($request, [
            'email' => 'required|email|distinct',
            'password' => 'required|min:6',
        ], [
        //custom message
            'email.required' => 'Signing in without E-mail ?',
            'email.email' => 'That\'s an nvalid E-mail !',
            'password.required' => 'Enter your password, Suleman !!!',
        ]);

       if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
           return redirect()->route('admin.dashboard');
       }
       return redirect()->back();
    }

    public function getProfile()
    {
        return view('admin.dashboard');
    }

    public function getLogout()
    {
        Auth::logout();

        return redirect()->route('product.index');
    }
}
