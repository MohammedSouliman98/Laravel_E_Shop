<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\productfactoryseederFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([]);


        $this->call([
            adminSeeder::class,
            productSeeder::class
            ]);
    }

    
}
