<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pokes;

class PokemonController extends Controller
{
    public function pokesapi()
    {
     $pok = pokes::paginate();
      return response()->json($pok);
    }

    public function pokemonid($id)
    {
      $po = pokes::find($id);
      return response()->json($po);
    }
}
