<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'AdminUser',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'), // Use a secure password
        ]);

        $user->createToken('SingleUserToken')->plainTextToken;
    }
}
