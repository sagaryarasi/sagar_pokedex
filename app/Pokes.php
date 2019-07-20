<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokes extends Model
{
  protected $table = 'pokes';
  protected $fillable = ['name', 'types', 'height', 'weight', 'abilities', 'egg_groups', 'stats', 'genus', 'description'];
  public $primarykey = 'id';
}
