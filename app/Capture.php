<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capture extends Model
{
  protected $table = 'captures';
  protected $fillable = ['user_name', 'user_mail', 'poke_name', 'poke_types', 'poke_height', 'poke_weight', 'poke_abilities', 'poke_egg_groups', 'poke_stats', 'poke_genus', 'poke_description'];
  public $primarykey = 'id';
}
