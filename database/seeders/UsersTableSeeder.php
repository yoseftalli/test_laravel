<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     */
    public function run() : void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin',
            'password' => bcrypt('admin'),
            'created_at' => '2020-01-01 12:20:15',
            'updated_at' => '2020-01-01 12:20:15'
        ]);
    }
}
