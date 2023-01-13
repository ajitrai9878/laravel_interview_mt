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
     * @return string
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@anydomain.com',
            'role' => 'admin',
            'password' => Hash::make('rootadmin'),
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@anydomain.com',
            'role' => 'user',
            'password' => Hash::make('rootuser'),
        ]);

        return 'user has been created...';
    }
}
