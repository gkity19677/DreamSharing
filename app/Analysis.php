<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analysis extends Model
{
  protected $table='analysis';
  protected   $primaryKey = 'id';
  protected  $fillable = ['title','content','kind'];
    //
}
