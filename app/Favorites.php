<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    protected $table='favorites';
    protected $primaryKey='fid';
    protected $fillable=['flag','u_id','article_id'];
    
    public function MyUser(){
      return $this->belongsTo('App\User','u_id','id');
    }
}
