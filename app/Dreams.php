<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dreams extends Model
{
    protected $table='dreams';
  protected   $primaryKey = 'id';
  protected  $fillable = ['title','content','date','account','share_time'];
  public $timestamps = false;
    //

}
