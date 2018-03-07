<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
  protected $table ='notes';

  protected $fillable = ['nom', 'puntuacio', 'idusuari', 'idcategoria', 'note'];
}