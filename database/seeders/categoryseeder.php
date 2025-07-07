<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class categoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        category::factory(2)->create();
        
    }
}
