<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Note extends Model
{
  use Rateable;

  protected $table ='notes';

  protected $fillable = ['nom', 'puntuacio', 'idusuari', 'idcategoria', 'note'];
}
