<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin User
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'phone_number' => '9876543210',
            'city' => 'Admin City',
            'address' => '123 Admin Street',
            'image' => 'admin.jpg', 
            'email' => 'admin@gmail.com',
            'role' => 'admin', 
            'password' => Hash::make('admin123'), 
        ]);

        // Customer User
        User::create([
            'first_name' => 'Customer',
            'last_name' => 'User',
            'phone_number' => '1234567890',
            'city' => 'Customer City',
            'address' => '456 Customer Avenue',
            'image' => 'customer.jpg', 
            'email' => 'customer@gmail.com',
            'role' => 'customer', 
            'password' => Hash::make('customer123'), 
        ]);

        User::factory()->count(18)->create();
    }
}
