<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pokes;

class PokeaddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $poke =Pokes::paginate(15);
        //$poke = Pokes::all()->paginate(15);
        return view('pokemo.index', compact('poke'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pokemo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'name'       => 'required',
          'types'      => 'required',
          'height'     => 'required',
          'weight'     => 'required',
          'abilities'   => 'required',
          'egg_group' => 'required',
          'stats'      => 'required',
          'genus'      => 'required',
          'description'=> 'required'
        ]);
        $poke = new Pokes([
            'name'      => $request->get('name'),
            'types'      => $request->get('types'),
            'height'      => $request->get('height'),
            'weight'      => $request->get('weight'),
            'abilities'      => $request->get('abilities'),
            'egg_groups'      => $request->get('egg_group'),
            'stats'      => $request->get('stats'),
            'genus'      => $request->get('genus'),
            'description'      => $request->get('description')

        ]);

        $poke->save();
        return redirect()->route('pokemo.create')->with('success','Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // $po = Pokes::find($id);
      // return view('pokemo.show')->compact('po');
     //return view('pokemo.show', ['po' => Pokes::findOrFail($id)]);
    }

    public function showbyid(request $request)
    {
      $request->input();
      $id=$request->input('id');
      $poke = Pokes::all();
      $tc=count($poke)+1;
      if($id<$tc){
        return view('pokemo.show', ['po' => Pokes::findOrFail($id)]);
      } else{
        return back()->with('error','Invalid Pokemon ID. Please Try again.' );

      }

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
