<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public function categories(){
      return $this->hasOne('App\Category');
    }


}
