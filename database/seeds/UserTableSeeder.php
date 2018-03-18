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
          'name' => 'fro',
          'email' => 'fro@fro.gr',
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

          $user =  App\User::create([
              'name' => 'Voras',
              'email' => 'voras@voras.gr',
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
