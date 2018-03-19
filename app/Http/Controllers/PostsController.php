<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use Auth;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->where('user_id',Auth::user()->id);
        return view('admin.posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create')->with('categories',Category::all())->with('tags',Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $this->validate($request,[
        'title' => 'required',
        'content' =>'required',
        'featured'=> 'required|image',
        'category_id'=> 'required'
      ]);

      $featured = $request->featured;

      $new_featured_name = time().$featured->getClientOriginalName();

      $featured->move('uploads',$new_featured_name);

      $post = Post::create([
        'title' => $request->title,
        'content' => $request->content,
        'featured'=> 'uploads/'.$new_featured_name,
        'category_id'=>$request->category_id,
        'user_id' => Auth::user()->id,
        'slug' => str_slug($request->title)
      ]);
      $post->tags()->attach($request->tags);
      $post->save();
      return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::find($id);

      return view('admin.posts.edit')
                            ->with('post',$post)
                            ->with('categories',Category::all())
                            ->with('tags',Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $this->validate($request,[
        'title'=> 'required',
        'content'=>'required',
        'category_id'=>'required'
      ]);

      $post=Post::find($id);

        if($request->hasFile('featured')){
          $featured = $request->featured;
          $new_featured_name = time().$featured->getClientOriginalName();
          $featured->move('uploads/',$new_featured_name);
          $post->featured = 'uploads/'.$new_featured_name;
        }

        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->content = $request->content;
        $post->save();

        $post->tags()->sync($request->tags);

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post ->delete();
        return redirect()->back();

    }
    public function trashed()
    {
      $posts = Post::onlyTrashed()->get();
      return view('admin.posts.trashed')->with('posts',$posts);

    }
    public function restore($id)
    {
      $post = Post::withTrashed()->where('id',$id)->first();
      $post->restore();
      return redirect()->back();
    }
    public function kill($id)
    {
      $post = Post::withTrashed()->where('id',$id)->first();
      $post->forceDelete();
      return redirect()->back();

    }
}
