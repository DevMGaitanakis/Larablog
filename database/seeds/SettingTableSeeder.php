<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = App\Setting::create([
          'site_name'=>'Blog',
          'contact_number'=>'6973830869',
          'contact_email'=>'manosgaitanakis93@gmail.com',
          'address'=>'Azymoy 2'
        ]);
    }
}
