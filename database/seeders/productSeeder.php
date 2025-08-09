<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\Color;
use App\Models\product;
use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        product::factory(100)->create();
        Color::factory(5)->create();
        Size::factory(5)->create();
    }
}
