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

        User::create([
            'first_name' => 'Smriti',
            'last_name' => 'Gurung',
            'phone_number' => '1234564490',
            'city' => 'Pokhara',
            'address' => 'New Road',
            'image' => 'smriti-1735633442.jpg',
            'email' => 'gurungsm.10@gmail.com',
            'role' => 'customer',
            'password' => Hash::make('smriti123'),
        ]);

        User::create([
            'first_name' => 'Aries',
            'last_name' => 'Gurung',
            'phone_number' => '3434567890',
            'city' => 'Kathmandu',
            'address' => '456 Aries Avenue',
            'image' => 'smriti-1739523647.jpg',
            'email' => 'aries@gmail.com',
            'role' => 'customer',
            'password' => Hash::make('aries123'),
        ]);

        User::factory()->count(18)->create();
    }
}
