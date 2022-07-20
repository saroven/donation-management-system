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


        $user = User::where('email', 'saroven@yahoo.com')->first();

        if ($user) {
            $this->command->info('Users table already seeded');
            return;
        }else{
            $this->command->info('Seeding Users table');
            User::create([
                'name' => 'Admin',
                'email' => 'saroven@yahoo.com',
                'mobile' => '01800000000',
                'gender' => 'male',
                'address' => 'Dhaka',
                'password' => Hash::make('123456'),
            ]);
        }
    }
}
