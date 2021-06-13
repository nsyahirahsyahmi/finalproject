<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name'=>'Chicken Chop',
            "price"=>"RM5.00",
            "description"=>"Chicken Chop topped with black pepper sauce, topped with coleslaw and fries",
            "category"=>"food",
            "gallery"=>"https://bazaronlinesgbuloh.my/wp-content/uploads/2021/03/Grilled-chicken-chop.jpg"
        ]);
    }
}
