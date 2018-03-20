<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{

  public function categories(){
    return $this->hasOne('App\Category');
  }
  public function posts(){
    return $this->hasMany('App\Post');
  }


}
