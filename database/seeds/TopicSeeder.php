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
                'image'=> 'https://s3-eu-west-1.amazonaws.com/uploads.playbaamboozle.com/uploads/images/152185/1607591595_198751',
                'description' => 'Most Popular Food in the World'
            ],

            [
                'title' => 'Travel',
                'image' => 'https://amilawfirm.com/wp-content/uploads/2019/05/auto-draft-3-6.jpg',
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
