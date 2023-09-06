<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replys extends Model
{
  protected $table='replys';
  protected $primaryKey = 'id';
  protected $fillable = ['content','date','did','account'];
  public $timestamps = false;
    //
    public function MyUser(){
      return $this->belongsTo('App\User','account','account');
}
}
