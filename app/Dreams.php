<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dreams extends Model
{
    protected $table='dreams';
  protected   $primaryKey = 'id';
  protected  $fillable = ['title','content','date','u_id','share_time'];
  public $timestamps = false;
    //
  public function MyUser(){
        return $this->belongsTo('App\User','u_id','id');
  }

}
