<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\support\Facades\URL;
use Illuminate\support\Facades\DB;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class MainController extends Controller
{
    function index()
    {
      return view('login');
    }

    function store(Request $request)
    {
      $this->validate($request,[
        'name'     => 'required',
        'email'    => 'required',
        'password' => 'required|alphaNum|min:3'
      ]);

      $new_user = new User([
        'name'     => $request->get('name'),
        'email'    => $request->get('email'),
        'password' => $request->get('password')
      ]);

       $new_user->save();
       return redirect()->route('login')->with('success','New User Created');
    }

    function checklogin(Request $request)
    {

       $this->validate($request, [
         'email'    => 'required|email',
         'password' => 'required|min:3',
       ]);


       $user_data = array(
        'email'    => $request->get('email'),
        'password' => $request->get('password')
       );


        if(Auth::attempt($user_data)){
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
