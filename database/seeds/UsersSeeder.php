<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
            [
                'email' => 'dangvannhang107@gmail.com',
                'password' => 'password',
                'role' => 'admin'
            ],
        ]);
    }
}
