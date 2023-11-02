<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    public function run()
    {
        // Create a sample user
        User::create([
            'name' => 'Rafael Nuansa',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);

        // You can also use a factory to create multiple users
        // factory(App\User::class, 10)->create();
    }
}
