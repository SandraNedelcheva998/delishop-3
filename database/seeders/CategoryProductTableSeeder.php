<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category_product')->delete();

        DB::table('category_product')->insert(array (
            0 =>
                array (
                   // 'id' => 1,
                    'product_id' => 1,
                    'category_id' => 1,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            1 =>
                array (
                   // 'id' => 2,
                    'product_id' => 2,
                    'category_id' => 1,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            2 =>
                array (
                  //  'id' => 3,
                    'product_id' => 4,
                    'category_id' => 1,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            3 =>
                array (
//                    'id' => 4,
                    'product_id' => 5,
                    'category_id' => 1,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            4 =>
                array (
//                    'id' => 5,
                    'product_id' => 6,
                    'category_id' => 2,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            5 =>
                array (
//                    'id' => 6,
                    'product_id' => 7,
                    'category_id' => 2,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            6 =>
                array (
//                    'id' => 7,
                    'product_id' => 8,
                    'category_id' => 3,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            7 =>
                array (
//                    'id' => 8,
                    'product_id' => 9,
                    'category_id' => 3,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            8 =>
                array (
//                    'id' => 9,
                    'product_id' => 10,
                    'category_id' => 3,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            9 =>
                array (
//                    'id' => 10,
                    'product_id' => 11,
                    'category_id' => 2,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            10 =>
                array (
//                    'id' => 11,
                    'product_id' => 11,
                    'category_id' => 4,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            11 =>
                array (
//                    'id' => 12,
                    'product_id' => 12,
                    'category_id' => 3,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            12 =>
                array (
//                    'id' => 13,
                    'product_id' => 12,
                    'category_id' => 4,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            13 =>
                array (
//                    'id' => 14,
                    'product_id' => 13,
                    'category_id' => 3,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            14 =>
                array (
//                    'id' => 15,
                    'product_id' => 13,
                    'category_id' => 4,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            15 =>
                array (
//                    'id' => 16,
                    'product_id' => 14,
                    'category_id' => 4,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
        ));
    }
}
