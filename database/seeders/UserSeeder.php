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
            'image' => 'admin.jpg', // Replace with a valid image path or default image
            'email' => 'admin@gmail.com',
            'role' => 'admin', // Assuming 'admin' is a valid role
            'password' => Hash::make('admin123'), // Secure hashed password
        ]);

        // Customer User
        User::create([
            'first_name' => 'Customer',
            'last_name' => 'User',
            'phone_number' => '1234567890',
            'city' => 'Customer City',
            'address' => '456 Customer Avenue',
            'image' => 'customer.jpg', // Replace with a valid image path or default image
            'email' => 'customer@gmail.com',
            'role' => 'customer', // Assuming 'customer' is a valid role
            'password' => Hash::make('customer123'), // Secure hashed password
        ]);
    }
}
