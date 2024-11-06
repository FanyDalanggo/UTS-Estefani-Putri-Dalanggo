<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Creating 5 random users with varying roles
        User::factory(5)->create();

        // Manually creating an Admin user
        User::factory()->create([
            'name' => 'Admin Kedai',
            'email' => 'kedai@gmail.com',
            'gambar' => 'admin.jpeg',
            'posts' => 100,
            'followers' => '5000', // using number strings
            'following' => '2000',
            'password' => Hash::make('kedai123'),
            'roles' => 'ADMIN',
        ]);

        // Manually creating a Staff user
        User::factory()->create([
            'name' => 'Staff',
            'email' => 'anonim1@gmail.com',
            'gambar' => 'anonim1.jpeg',
            'posts' => 150,
            'followers' => '6000', // using number strings
            'following' => '3000',
            'password' => Hash::make('staf123'),
            'roles' => 'STAFF',
        ]);

        // Manually creating a Staff user
        User::factory()->create([
            'name' => 'User',
            'email' => 'anonim2@gmail.com',
            'gambar' => 'anonim2.jpeg',
            'posts' => 200,
            'followers' => '7000', // using number strings
            'following' => '4000',
            'password' => Hash::make('user123'),
            'roles' => 'USER',
        ]);

        // Calling the ProductSeeder to seed the products table
        $this->call(ProductSeeder::class);
    }
}
