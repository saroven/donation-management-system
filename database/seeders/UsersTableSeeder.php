<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'saroven@yahoo.com',
            'mobile' => '01800000000',
            'gender' => 'male',
            'address' => 'Dhaka',
            'password' => Hash::make('123456'),
        ]);
    }
}
