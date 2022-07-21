<?php

namespace Database\Seeders;

use App\Models\User;
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


        $user = User::all()->count();

        if ($user != 0) {
            $this->command->info('Users table already seeded');
            return;
        }else{
            $this->command->info('Seeding Users table');

            // Create admin user
            User::create([
                'name' => 'Mohammad Shah Alam',
                'email' => 'saroven@yahoo.com',
                'mobile' => '01800000000',
                'gender' => 'male',
                'address' => 'Dhaka',
                'user_type' => 1,
                'password' => Hash::make('123456'),
            ]);
            //create admin user
            User::create([
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'mobile' => '01800000000',
                'gender' => 'male',
                'address' => 'dhaka',
                'user_type' => 1,
                'password' => Hash::make('123456'),
            ]);

            User::create([
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'mobile' => '01800000000',
                'gender' => 'male',
                'address' => 'dhaka',
                'user_type' => 1,
                'password' => Hash::make('123456'),
            ]);

            //create volunteer user
            User::create([
                'name' => 'volunteer',
                'email' => 'volunteer@gmail.com',
                'mobile' => '01800000000',
                'gender' => 'male',
                'address' => 'dhaka',
                'user_type' => 2,
                'password' => Hash::make('123456'),
            ]);

            //create donor user
            User::create([
                'name' => 'donor',
                'email' => 'donor@gmail.com',
                'mobile' => '01800000000',
                'gender' => 'male',
                'address' => 'dhaka',
                'user_type' => 3,
                'password' => Hash::make('123456'),
            ]);
        }
    }
}
