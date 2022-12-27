<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            [
                'name' => 'Mukesh Bhandari',
                'email' => 'mukesh@ecommerce.com',
                'password' => Hash::make('123456789m')
            ],
            [
                'name' => 'Milan Thapa',
                'email' => 'milan@ecommerce.com',
                'password' => Hash::make('123456789m')
            ],
            [
                'name' => 'Manish Karki',
                'email' => 'manish@ecommerce.com',
                'password' => Hash::make('123456789m')
            ]
        ]);
    }
}
