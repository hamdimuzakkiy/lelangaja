<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class AuthController extends Controller
{
    public function authenticate(Request $request){
    	if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){    		    	    		
    		return redirect()->intended(Auth::user()->role.'/index');    		
    	}
    	return redirect()->intended('login');
    }    

    public function signup(){
        return 'sign up';
    }

    public function logout(){
    	Auth::logout();    	
    	return redirect('login');
    }

    public function login(){       	
    	return view('auth/login');
    }
}
