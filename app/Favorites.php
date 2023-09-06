<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    protected $table='favorites';
    protected $primaryKey='fid';
    protected $fillable=['fid','flag','u_id','article_id','account'];
    public $timestamps = false;

    public function MyUser(){
      return $this->belongsTo('App\User','u_id','id');
    }
    public function belongsToDream()
    {
      if ($this->flag=='D') {
        return $this->belongsTo('App\Dreams','article_id','id');
      }else{
        return $this->belongsTo('App\Analysis','article_id','id');
      }
    }
}
