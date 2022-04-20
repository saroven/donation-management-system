<?php

namespace Database\Seeders;

use App\Models\DonationTypes;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DonationTypes::create(
            ['name' => 'Food Donation']
        );
        DonationTypes::create(
            ['name' => 'Cloth Donation']
        );
        DonationTypes::create(
            ['name' => 'Books Donation']
        );
        DonationTypes::create(
            ['name' => 'Footwear Donation']
        );
    }
}