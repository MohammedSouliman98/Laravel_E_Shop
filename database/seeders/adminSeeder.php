<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create($this->admin());
    }
    private function admin(){
        return  [
                'name' => 'mohammed',
                'email' => 'mohammed@mohammed.com',
                'is_admin' => 1,
                'password' => Hash::make('12121212')
            ];      
    }
}
