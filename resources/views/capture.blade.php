@extends('/layouts/app')

@section('content')
<div class="poke">
   <h1 class="my-5 text-uppercase" align="center">Captured Pokemons</h1>
  @if(count($ca)>0)
    @if(count($ca)==1)
       <h3 align="center" class="my-3">You have successfully captured {{count($ca)}} Pokemon. Keep Going!!!</h3>
    @else
       <h3 align="center" class="my-3">You have successfully captured {{count($ca)}} Pokemons. Keep Going!!!</h3>
    @endif
  @foreach($ca as $index=>$r)

  <h3><b>{{$r->poke_name}}</b></h3>
  <br/>
  <div class="row mb-5">
    <div class="col-sm-4">
      <p><b>Types:</b> {{$r->poke_types}}</p>
      <p><b>Height:</b> {{$r->poke_height}}</p>
      <p><b>Weight:</b> {{$r->poke_weight}}</p>
    </div>
    <div class="col-sm-4">
      <p><b>Abilities:</b> {{$r->poke_abilities}}</p>
      <p><b>Egg Groups:</b> {{$r->poke_egg_groups}}</p>
      <p><b>Stats:</b> {{$r->poke_stats}}</p>
    </div>
    <div class="col-sm-4">
      <p><b>Genus:</b> {{$r->poke_genus}}</p>
      <p><b>Description:</b> {{$r->poke_description}}</p>
    </div>
  </div>

  @endforeach

 @else
   <h3 align="center">You are yet to capture pokemons. Good Luck!!!</h3>


</div>
@endif
@endsection
