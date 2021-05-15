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
                'image'=> 'https://lh3.googleusercontent.com/proxy/hInPyOF9QHAxJrcm2oOch67UdRqnZqudTacffZrKaeoAbQucdvbmbxargRgrhrxzjJhDEyvPPlB6kTDnLkTciGDEI11yB8cdAivce3BfpQsx_hOVzkMODDvD4Qv-jZcZv0_SVuGb9Lcaqw',
                'description' => 'Most Popular Food in the World'
            ],

            [
                'title' => 'Travel',
                'image' => 'https://img.lovepik.com/photo/40009/8658.jpg_wh860.jpg',
                'description' => "World's Best Places to Visit"
            ],

            [
                'title' => 'Online Games',
                'image' => 'https://cdn.tgdd.vn//GameApp/1305640//PicsArt11-10-02.08.50-800x450.jpg',
                'description' => 'The Most Popular Online Games in the USA'
            ],

            [
                'title' => 'Social Media',
                'image' => 'https://caodang.fpt.edu.vn/wp-content/uploads/Social-Media-History.jpg',
                'description' => 'The most popular social media sites'
            ]
        ]);
    }   
}
