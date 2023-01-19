<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        User::create([
            'username' => 'seamslabs',
            'email' => 'admin@seamslabs.com',
            'phone_number' => '01020304050',
            'date_of_birth' => now(),
            'password' => '123456'  // password hashed  in model with mutator
        ]);
    }
}
