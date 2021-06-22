<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('topics')->insert([
            [
                'title_topic' => 'Food',
                'image_topic'=> 'https://media.istockphoto.com/photos/top-view-table-full-of-food-picture-id1220017909?b=1&k=6&m=1220017909&s=170667a&w=0&h=yqVHUpGRq-vldcbdMjSbaDV9j52Vq8AaGUNpYBGklXs=',
                'descr_topic' => 'Most Popular Food in the World'
            ],

            [
                'title_topic' => 'Travel',
                'image_topic' => 'https://img.lovepik.com/photo/40009/8658.jpg_wh860.jpg',
                'descr_topic' => "World's Best Places to Visit"
            ],

            [
                'title_topic' => 'Online Games',
                'image_topic' => 'https://cdn.tgdd.vn//GameApp/1305640//PicsArt11-10-02.08.50-800x450.jpg',
                'descr_topic' => 'The Most Popular Online Games in the USA'
            ],

            [
                'title_topic' => 'Social Media',
                'image_topic' => 'https://caodang.fpt.edu.vn/wp-content/uploads/Social-Media-History.jpg',
                'descr_topic' => 'The most popular social media sites'
            ]
        ]);
    }   
}
