<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categories =  App\Category::create([
          'name' => 'Cyber Security',
        ]);
        $categories =  App\Category::create([
            'name' => 'Ethical Hacking',
          ]);
          $categories =  App\Category::create([
              'name' => 'Laravel',
            ]);
    }
}
