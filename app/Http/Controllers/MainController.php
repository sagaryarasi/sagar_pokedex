<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\URL;
use Illuminate\support\Facades\DB;
use Validator;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    function index()
    {
      return view('login');
    }

    function checklogin(Request $request)
    {

       $this->validate($request, [
         'email'    => 'required|email',
         'password' => 'required|min:3',
       ]);

       // $user_data = array(
       //  'email'    => $request->get('email'),
       //   'password' => $request->get('password')
       // );
       $cred = $request->only('email', 'password');

       //if(Auth::attempt($cred))
       if(Auth::attempt(['email' => 'email', 'password' => 'password']))
       {
         return redirect('main/successlogin');
       }
       else {

          return back()->with('error','Wrong Login Details');
       }
    }

    function successlogin()
    {
      return view('successlogin');
    }

    function logout()
    {
      Auth::logout();
      return redirect('main');
    }

}
