<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function login(Request $req)
    {
		//return $req->input();
       $user = User::where(['email'=> $req->email])->first();
	   //dd($user);
	   if (!$user || !Hash::check($req->password,$user->password))
       {
         return "Username or Password is not matched";
       }
       else
       {
		   $req->session()->put('user',$user);  /*After Login with correct email and password, in user variable - detail of email is put so that after login in to website without loggin out user should not have to enter email and password */
        return redirect('/');
       }
        
    }

    public function logout(Request $req)
    {
      $req->session()->forget('user');
      return redirect('/login');
    }
}
