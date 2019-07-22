<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\Facades\DB;
use App\Capture;

class CapturesController extends Controller
{
 public function capt(request $request){
   print_r($name = $request->get('pname'));
   print_r($user = Auth::user()->email);


   $dup = DB::table('captures')->where('user_mail', '=', $user)
   ->where('poke_name', '=', $name)->get();

   if(count($dup)>0){
     return redirect()->back()->with('error','You have already captured '. $name . '.');
   } else{
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
     return redirect()->back()->with('success','Well Done!!! You have captured '. $name . '!!!');

   }


   //return view('capture')->with('success','Well Done!!! You have captured '. $name . '!!!');
 }

 public function cap_poke()
 {

   $user = Auth::user()->email;
   //$shipToShipmentsCount = shipment::whereIn('ship_to',$customersID)->count();
   $ca = DB::table('captures')->where('user_mail',  $user)->get();



   //return view('store')->with('store', $store);
   return view('capture')->with(compact('ca') );
 }
}
