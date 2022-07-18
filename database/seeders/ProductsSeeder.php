<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Product::insert([
             'name' =>'maxwell',
             'price'=>'1000',
             'description'=>'teste de products',
             'color'=>'preto',
             'qtd'=>'10',
             'height'=>'10',
             'width'=>'5',
             'depth'=>'6',
             'weight'=>'8'
            
             
             
            // 'category_id'=>App\Category::inRandomOrder()->first()->id,
             //'bulks_slug'=>App\Bulk::inRandomOrder()->fist()->id
            ]);
        
    }
}
