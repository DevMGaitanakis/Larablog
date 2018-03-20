<?php

use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategory = App\SubCategory::create([
          'name'=>'SubCategory1',
          'category_id'=>1
        ]);
        $subcategory = App\SubCategory::create([
          'name'=>'SubCategory2',
          'category_id'=>2
        ]);
        $subcategory = App\SubCategory::create([
          'name'=>'SubCategory3',
          'category_id'=>3
        ]);
    }
}
