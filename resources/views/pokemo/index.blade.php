@extends('layouts/app')

@section('content')
   <div class="col-md-12 poke">
     <br/>
     <h2 align="center" class="text-uppercase">List of All Pokemons</h2>
     @if($message = Session::get('error'))
     <div class="alert alert-danger alert-block">

       <p>{{$message}}</p>
     </div>
     @endif

     <br/>

     @if(\Session::has('success'))
       <div class="alert alert-success">
         <p>{{\Session::get('success')}}</p>
      </div>
     @endif

     <form method="post" action="{{ url('pokemo/show') }}">
       {{ csrf_field() }}
       <div class="form-group">
         <label>Enter the ID of Pokemon</label>
         <input type="text" name="id" class="form-control"/>
       </div>
       <div class="form-group">

       <div class="form-group">
         <input type="submit" name="find" class="btn btn-primary" value="Find"/>
       </div>
     </form>


     @foreach($poke as $row)
        <h3><span>{{$row['id']}})</span> <b>{{$row['name']}}</b></h3>
        <br/>
        <div class="row">
          <div class="col-sm-4">
            <p><b>Types:</b> {{$row['types']}}</p>
            <p><b>Height:</b> {{$row['height']}}</p>
            <p><b>Weight:</b> {{$row['weight']}}</p>
          </div>
          <div class="col-sm-4">
            <p><b>Abilities:</b> {{$row['abilities']}}</p>
            <p><b>Egg Groups:</b> {{$row['egg_groups']}}</p>
            <p><b>Stats:</b> {{$row['stats']}}</p>
          </div>
          <div class="col-sm-4">
            <p><b>Genus:</b> {{$row['genus']}}</p>
            <p><b>Description:</b> {{$row['description']}}</p>

          </div>
        </div>
        <br/>

         <form method="post" action="{{url('/capture')}}">
          {{ csrf_field() }}
          <input name="uname" type="hidden" value="{{Auth::user()->name}}">
          <input name="uemail" type="hidden" value="{{Auth::user()->email}}">
          <input name="pname" type="hidden" value="{{$row['name']}}">
          <input name="ptypes" type="hidden" value="{{$row['types']}}">
          <input name="pheight" type="hidden" value="{{$row['height']}}">
          <input name="pweight" type="hidden" value="{{$row['weight']}}">
          <input name="pabilities" type="hidden" value="{{$row['abilities']}}">
          <input name="pegg" type="hidden" value="{{$row['egg_groups']}}">
          <input name="pstats" type="hidden" value="{{$row['stats']}}">
          <input name="pgenus" type="hidden" value="{{$row['genus']}}">
          <input name="pdesc" type="hidden" value="{{$row['description']}}">
         <input type="submit" value="Captured" class="btn btn-success"/>
       </form>


        <br/>
        <br/>
        <br/>
     @endforeach

   </div>
   <div class="pag">
   {{$poke->links()}}
 </div>
   <br/>
   <br/>

@endsection
