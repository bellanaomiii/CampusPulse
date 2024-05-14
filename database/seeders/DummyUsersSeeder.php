<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name'=>'Admin1',
                'email'=>'adminCampus@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('12345678')
            ],

            [
                'name'=>'Admin2',
                'email'=>'adminCampus2@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('123456789')
            ],

            [
                'name'=>'Bella',
                'email'=>'bellaku@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('123456')
            ],

        ];

        foreach ($userData as $key => $value) {
            User::create($value);
        }

    }
}
