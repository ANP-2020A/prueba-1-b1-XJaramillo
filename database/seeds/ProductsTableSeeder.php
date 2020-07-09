<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         Product::truncate();

     $faker = \Faker\Factory::create();
     for($i = 0; $i < 50; $i++) {
         Product::create([
             'name' => $faker->name,
             'code' => $faker->sentence,
             'price' => $faker->numberBetween(20,500),
             'status' =>'active',
             ]);
        }
     }
}
