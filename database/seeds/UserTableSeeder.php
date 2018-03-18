<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user =  App\User::create([
          'name' => 'admin',
          'email' => 'admin@admin.gr',
          'admin' => 1,
          'password' => bcrypt('password')
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/avatar.jpg',
            'about' => 'lorem',
            'facebook' => 'facebook profile',
            'youtube' => 'youtube profile'
          ]);
    }


  }
