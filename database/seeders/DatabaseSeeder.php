<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
      DB::table('products')->insert([
        [ 
            'img' =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRB9FAUoYDxnuD__5nLPhstC91CniJRwT0k0w&s',
            'brand' => 'Nike',
            'title' =>'air max',
            'rating'=> 3,
            'reviews' => 12,
            'sellPrice'=> 140,
            'orders'=>500,
            'mrp'=> 170,
            'category' => 'Men',
            'created_at' => now(),
            'updated_at'=> now(),
        ],
        [
            'img' =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkOLNbYbapM0g3n8EXBBxsbPGuBQWfW7DVDQ&s',
            'brand' => 'Adidas',
            'title' =>'ultraboost',
            'rating'=> 4.5,
            'reviews' => 12,
            'sellPrice'=> 140.9,
            'orders'=>700,
            'mrp'=> 190,
            'reviews' => 90,
            'category' => 'Women',
            'created_at' => now(),
            'updated_at'=> now(),
        ],
        
        ]);
    }
}