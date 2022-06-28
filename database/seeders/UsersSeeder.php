<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        DB::table('users')->delete();
        DB::table('users')->insert(array (
            0 =>
                array (
                    'id'=>1,
                    'name'=>'user1',
                    'email'=>'user1@user1.com',
                    'password'=>Hash::make('user1@user1.com'),
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                ),
            1 =>
                array (
                    'id'=>2,
                    'name'=>'user2',
                    'email'=>'user2@user2.com',
                    'password'=>Hash::make('user2@user2.com'),
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                ),
            2 =>
                array (
                    'id'=>3,
                    'name'=>'admin',
                    'email'=>'admin@admin.com',
                    'password'=>Hash::make('admin@admin.com'),
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                ),

        ));

    }
}
