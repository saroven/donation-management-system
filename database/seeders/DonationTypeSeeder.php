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
        //donation type seeder
        $donationType = DonationTypes::all()->count();
        if ($donationType != 0) {
            $this->command->info('DonationType already seeded');
            return;
        } else {
            $this->command->info('Seeding DonationType table');

                DonationTypes::create(
                    ['title' => 'Food Donation']
                );
                DonationTypes::create(
                    ['title' => 'Cloth Donation']
                );
                DonationTypes::create(
                    ['title' => 'Books Donation']
                );
                DonationTypes::create(
                    ['title' => 'Footwear Donation']
                );
        }
    }
}
