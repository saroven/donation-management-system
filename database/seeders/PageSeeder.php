<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //page seeder
        $page = Page::all()->count();
        if ($page != 0) {
            $this->command->info('Pages table already seeded');
            return;
        }else{
            $this->command->info('Seeding Pages table');
                Page::create(
                [
                    'title' => 'About Us',
                    'slug' => 'about-us',
                ]
            );
            Page::create(
                [
                    'title' => 'Privacy Policy',
                    'slug' => 'privacy-policy',
                ]
            );
            Page::create(
                [
                    'title' => 'Terms & Conditions',
                    'slug' => 'terms-and-conditions',
                ]
            );
        }
    }
}
