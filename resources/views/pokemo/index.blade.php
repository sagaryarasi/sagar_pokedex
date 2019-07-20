@extends('master')

@section('content')
   <div class="col-md-12">
     <br/>
     <h2 align="center" class="text-uppercase">List of All Pokemons</h2>


     <form method="post" action={{ url('pokemo/show')}}>
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
     @if($message = Session::get('error'))
     <div class="alert alert-danger alert-block">
       <button type="button" class="close" data-dismiss="alert">X</button>
       <strong>{{$message}}</strong>
     </div>
     @endif
     <br/>
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
        <input type="submit" value="Captured" class="btn btn-success"/>
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

<style lang="scss">
   p{
     font-size: 2rem;
   }
  .row{
    background-color: #e5e5e5;
    display: flex;
    border: 1px solid gray;
  }
  .col-sm-4{
    border-right: 1px solid gray;
    padding: 2rem 1rem;
  }
  .pag{
    text-align: center;
  }
</style>
