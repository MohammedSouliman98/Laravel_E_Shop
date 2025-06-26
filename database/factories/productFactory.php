<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $categories = ['Men', 'Women', 'Kids', 'Unisex'];
        $sizes = ['S,M,L,XL', 'XS,S,M,L,XL', '28,30,32,34', 'One Size'];
        $clothingTypes = ['T-Shirt', 'Jeans', 'Dress', 'Jacket', 'Hoodie', 'Shorts'];

        
        return [
            'name' => $this->faker->unique()->words(3, true),
            'description' => $this->faker->paragraph(3),
            'price' => $this->faker->randomFloat(2, 10, 200),
            'images' => 'img/product-'  . random_int(1,8) .   '.jpg',
            'category' => Arr::random($categories),
            'size_options' => Arr::random($sizes),
            'stock' => $this->faker->numberBetween(0, 100),
        ];
    }
}
