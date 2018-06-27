<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replys extends Model
{
  protected $table='replys';
  protected $primaryKey = 'id';
  protected $fillable = ['content','date','u_id','did'];
  public $timestamps = false;
    //
  public function MyUser(){
        return $this->belongsTo('App\User','u_id','id');
  }
}
