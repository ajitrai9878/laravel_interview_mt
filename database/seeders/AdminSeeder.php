<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return User::create([
            'name' => 'athens',
            'email' => 'admin@athens.com',
            'phone_number' => '9878191645',
            'password' => Hash::make('rootadmin'),
        ]);
    }
}
