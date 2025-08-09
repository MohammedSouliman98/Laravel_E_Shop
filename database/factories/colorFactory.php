<?php

namespace Database\Factories;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\color>
 */
class colorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */

     public $index = 0;
    public function definition(): array
    {
        $colors = ['red', 'green' , 'blue' , 'black', 'orange'];
        return [
            'name' => Arr::random($colors),
        ];        

        }
}
