<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;
use App\Category;
use App\Post;

class FrontPageController extends Controller
{
    public function index(){
      $d=Category::take(3)->get();
    //  dd($d);
      $settings = Setting::first();

      return view('layouts.index')
      ->with('title',$settings->site_name)
      ->with('categories',Category::take(5)->get())
      ->with('first_post',Post::orderBy('created_at','desc')->first())
      ->with('second_post',Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
      ->with('third_post',Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
      ->with('fourth_post',Post::orderBy('created_at','desc')->skip(3)->take(1)->get()->first())
      ->with('fifth_post',Post::orderBy('created_at','desc')->skip(4)->take(1)->get()->first());


    }


}
