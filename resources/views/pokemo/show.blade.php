@extends('/layouts/app')
@section('content')

@if(!empty($po))

<div>
  <h1>Details of the selected Pokemon.</h1>
<h2><b>Name:</b> {{$po['name']}}</h2>
<p><b>Types:</b> {{$po['types']}}</p>
<p><b>Height:</b> {{$po['height']}}</p>
<p><b>Weight:</b> {{$po['weight']}}</p>
<p><b>Abilities:</b> {{$po['abilities']}}</p>
<p><b>Egg Groups:</b> {{$po['egg_groups']}}</p>
<p><b>Stats:</b> {{$po['stats']}}</p>
<p><b>Genus:</b> {{$po['genus']}}</p>
<p><b>Description:</b> {{$po['description']}}</p>
</div>

@endif


@endsection
