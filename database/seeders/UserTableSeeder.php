<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Developer',
            'email' => 'developer@gmail.com',
            'phone' => '01737933939',
            'role' => 'developer',
            'password' => bcrypt('rootdeveloper'),
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '01822442222',
            'role' => 'admin',
            'password' => bcrypt('rootadmin'),
        ]);

        DB::table('users')->insert([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'phone' => '01755342693',
            'role' => 'user',
            'password' => bcrypt('rootuser'),
        ]);
    }
}
