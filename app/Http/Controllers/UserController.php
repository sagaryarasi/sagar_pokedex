<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function userdata()
    {
      $trainer = User::all();
      return response()->json($trainer);
    }

    public function userid($id)
    {
      $user = User::find($id);
      return response()->json($user);
    }

}
