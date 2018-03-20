<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $posts = App\Post::create([
        'title'=>'Dummy Blog Post Number 1',
        'content'=>'Lorem',
        'user_id'=>1,
        'slug'=>'dummy-blog-post-number-1',
        'category_id'=>1,
        'subcategory_id'=>1,
        'featured'=>'uploads/dummy1.jpg',
      ]);
      $posts = App\Post::create([
        'title'=>'Dummy Blog Post Number 2',
        'content'=>'Lorem',
        'user_id'=>2,
        'slug'=>'dummy-blog-post-number-2',
        'category_id'=>2,
        'subcategory_id'=>1,
        'featured'=>'uploads/dummy2.jpg',
      ]);
      $posts = App\Post::create([
        'title'=>'Dummy Blog Post Number 3',
        'content'=>'Lorem',
        'user_id'=>1,
        'slug'=>'dummy-blog-post-number-3',
        'category_id'=>3,
        'subcategory_id'=>2,
        'featured'=>'uploads/dummy3.jpg',
      ]);
      $posts = App\Post::create([
        'title'=>'Dummy Blog Post Number 4',
        'content'=>'Lorem',
        'user_id'=>2,
        'slug'=>'dummy-blog-post-number-4',
        'category_id'=>2,
        'subcategory_id'=>3,
        'featured'=>'uploads/dummy2.jpg',
      ]);
      $posts = App\Post::create([
        'title'=>'Dummy Blog Post Number 5',
        'content'=>'Lorem',
        'user_id'=>1,
        'slug'=>'dummy-blog-post-number-5',
        'category_id'=>2,
        'subcategory_id'=>1,
        'featured'=>'uploads/dummy1.jpg',
      ]);
      $posts = App\Post::create([
        'title'=>'Dummy Blog Post Number 6',
        'content'=>'Lorem',
        'user_id'=>1,
        'slug'=>'dummy-blog-post-number-6',
        'category_id'=>3,
        'subcategory_id'=>2,
        'featured'=>'uploads/dummy1.jpg',
      ]);
      $posts = App\Post::create([
        'title'=>'Dummy Blog Post Number 7',
        'content'=>'Lorem',
        'user_id'=>1,
        'slug'=>'dummy-blog-post-number-7',
        'category_id'=>1,
        'subcategory_id'=>3,
        'featured'=>'uploads/dummy3.jpg',
      ]);
      $posts = App\Post::create([
        'title'=>'Dummy Blog Post Number 8',
        'content'=>'Lorem',
        'user_id'=>1,
        'slug'=>'dummy-blog-post-number-8',
        'category_id'=>2,
        'subcategory_id'=>1,
        'featured'=>'uploads/dummy2.jpg',
      ]);


    }
}
