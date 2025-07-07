<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\category>
 */
class categoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     * 
     */



    public function definition(): array
    {

     $categories = ['Men', 'Women', 'Kids', 'Unisex'];

        return [
           'name' => Arr::random($categories),
           'slug' => $this->faker->unique()->slug(),
            'description' => $this->faker->sentence(),
        ];
    }
}
