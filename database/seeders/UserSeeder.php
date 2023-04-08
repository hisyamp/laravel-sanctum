<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            "name"=>"abra",
            "email"=>"abra@mail.com",
            "password"=>bcrypt('11111111')
        ]);
        $admin->assignRole('admin');
        $user = User::create([
            "name"=>"ibra",
            "email"=>"ibra@mail.com",
            "password"=>bcrypt('11111111')
        ]);
        $user->assignRole('user');
    }
}
