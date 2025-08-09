<?php

namespace Database\Factories;

use App\Models\category;
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
        $clothingTypes = ['T-Shirt', 'Jeans', 'Dress', 'Jacket', 'Hoodie', 'Shorts'];

        
        return [
            'name' => $this->faker->unique()->words(3, true),
            'description' => $this->faker->paragraph(3),
            'price' => $this->faker->randomFloat(2, 10, 200),
            'images' => 'img/product-'  . random_int(1,8) .   '.jpg',
            'category_id' => 1,
            'stock' => $this->faker->numberBetween(0, 100),
        ];
    }
}
