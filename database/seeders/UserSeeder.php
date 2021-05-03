<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('adminadmin'),
            'role' => 'admin'
        ]);
        $user = User::create([
            'name' => 'Regular User',
            'email' => 'user@domain.com',
            'password' => Hash::make('password'),
            'role' => 'user'
        ]);
    }
}
