<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Setting;
use App\Category;
use App\Post;
use App\User;

use Auth;

class FrontPageController extends Controller
{
    public function index(){
    //  $d=Auth::user()->id;
//     dd($d);
      $settings = Setting::first();
      return view('layouts.index')
      ->with('title',$settings->site_name)
      ->with('categories',Category::take(3)->get())
      ->with('first_post',Post::orderBy('created_at','desc')->first())
      ->with('second_post',Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
      ->with('third_post',Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
      ->with('fourth_post',Post::orderBy('created_at','desc')->skip(3)->take(1)->get()->first())
      ->with('fifth_post',Post::orderBy('created_at','desc')->skip(4)->take(1)->get()->first());
    }

      public function viewPost($slug){
          $settings = Setting::first();
          $post = Post::where('slug',$slug)->first();
          $author = User::where('id',$post->user_id)->first();
          $categoryposts = Post::where('category_id',$post->category_id)->get();
          return view('layouts.viewPost')
          ->with('samecategoryposts',$categoryposts)
          ->with('post',$post)
          ->with('author',$author->name)
          ->with('title',$settings->site_name)
          ->with('categories',Category::take(3)->get());
        }
  }
