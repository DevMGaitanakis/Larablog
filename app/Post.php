<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Post extends Model
{
  use softDeletes;

  protected $fillable = [
      'title', 'featured', 'category_id','content','slug','user_id'
  ];

protected $dates =['deleted_at'];

public function getFeaturedAttribute($featured){

  return asset($featured);
}
//returns the full path to display the image

  public function category(){
    return $this->belongsTo('App\Category');
  }
  public function user(){
    return $this->belongsTo('App\User');
  }
  public function tags(){
    return $this->belongsToMany('App\Tag');
  }


}
