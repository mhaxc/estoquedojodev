<?php

namespace Database\Factories;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Category;
use App\Models\Bulk;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
             'name' => $this->faker->word(),
             'price'=>$this->faker->randomDigit(2,0,9999),
             'description'=>$this->faker->sentence(),
             'color'=>$this->faker->colorName(),
             'description'=>$this->faker->sentence(),
             'qtd'=>$this->faker->randomNumber(),
             'height'=>$this->faker->randomNumber(),
             'width'=>$this->faker->randomNumber(),
             'depth'=>$this->faker->randomNumber(),
            
             
             
             'category_id'=>App\Category::inRandomOrder()->first()->id,
             'bulks_slug'=>App\Bulk::inRandomOrder()->fist()->id
             
        ];
    }
}
