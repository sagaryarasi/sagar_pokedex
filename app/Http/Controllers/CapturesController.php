<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capture;

class CapturesController extends Controller
{
 public function capt(request $request){
   echo "success";
   print_r($request->input());

   $cap = new Capture([
       'user_name'        => $request->get('uname'),
       'user_mail'       => $request->get('uemail'),
       'poke_name'        => $request->get('pname'),
       'poke_types'       => $request->get('ptypes'),
       'poke_height'      => $request->get('pheight'),
       'poke_weight'      => $request->get('pweight'),
       'poke_abilities'   => $request->get('pabilities'),
       'poke_egg_groups'  => $request->get('pegg'),
       'poke_stats'       => $request->get('pstats'),
       'poke_genus'       => $request->get('pgenus'),
       'poke_description' => $request->get('pdesc'),

   ]);

   $cap->save();
   return redirect()->back()->with('success','Congratulations!!! You have Captured an awesome Pokemon!');
}
}