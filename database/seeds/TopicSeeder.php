<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('topic')->insert([
            [
                'title' => 'Food',
                'image'=> 'https://www.dietdoctor.com/wp-content/uploads/2019/03/Low-carb-food-200x200.jpg',
                'description' => 'Most Popular Food in the World'
            ],

            [
                'title' => 'Travel',
                'image' => 'https://lh3.googleusercontent.com/proxy/Zn9fimZEEtfK2CAN8AUywfQbCmUmVnl8PaaZd4O2Iu4vJSTSTbI7CYnYy6x8rYkNf0E2WnUtdUtcmAEnR1rSl30fmI7kabunuo2PqKNGejXa1naYBoiNb6-2Y9Pg-ULsCYA',
                'description' => "World's Best Places to Visit"
            ],

            [
                'title' => 'Online Games',
                'image' => 'https://lh3.googleusercontent.com/proxy/7g-2hND440mwDYDTQK636Wnkt5MzfD9FAlSmcgNrwI93743Q2JPMMWUrGpkeim3BvAp7zKPL4BgcRYSngqPqoDx5_D8MP81pmlItNHdLbPgf',
                'description' => 'The Most Popular Online Games in the USA'
            ],

            [
                'title' => 'Social Media',
                'image' => 'https://libraryeuroparl.files.wordpress.com/2014/02/social-media.jpg?w=200',
                'description' => 'The most popular social media sites'
            ]
        ]);
    }   
}
