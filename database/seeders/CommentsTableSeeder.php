<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('comments')->delete();

        DB::table('comments')->insert(array (
            0 =>
                array (
                    'id' => 12,
                    'FullComment' => 'tasty but only when it\'s warm',
                    'CommentRating' => 3,
                    'createDate' => '2020-10-11 12:50:29',
                    'product_id' => 1,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                    'Username' => 'user1'
                ),
            1 =>
                array (
                    'id' => 13,
                    'FullComment' => 'nice',
                    'CommentRating' => 3,
                    'createDate' => '2020-10-12 13:23:57',
                    'product_id' => 11,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                    'Username' => 'user2'

                ),
            2 =>
                array (
                    'id' => 14,
                    'FullComment' => 'hhbhb',
                    'CommentRating' => 3,
                    'createDate' => '2020-10-12 13:39:37',
                    'product_id' => 2,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                    'Username' => 'user2'

                ),
            3 =>
                array (
                    'id' => 15,
                    'FullComment' => 'test user',
                    'CommentRating' => 4,
                    'createDate' => '2020-10-12 16:49:58',
                    'product_id' => 1,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                    'Username' => 'user1'

                ),
            4 =>
                array (
                    'id' => 16,
                    'FullComment' => 'test',
                    'CommentRating' => 5,
                    'createDate' => '2020-10-12 17:15:08',
                    'product_id' => 1,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                    'Username' => 'user1'

                ),
            5 =>
                array (
                    'id' => 17,
                    'FullComment' => 'ergegeh',
                    'CommentRating' => 5,
                    'createDate' => '2020-11-12 01:34:33',
                    'product_id' => 1,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                    'Username' => 'user2'

                ),
            6 =>
                array (
                    'id' => 18,
                    'FullComment' => 'eteheth',
                    'CommentRating' => 3,
                    'createDate' => '2020-11-12 01:45:35',
                    'product_id' => 1,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                    'Username' => 'user1'

                ),
            7 =>
                array (
                    'id' => 19,
                    'FullComment' => 'djnjnjn',
                    'CommentRating' => 4,
                    'createDate' => '2020-11-12 09:47:33',
                    'product_id' => 1,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                    'Username' => 'user1'

                ),
            8 =>
                array (
                    'id' => 20,
                    'FullComment' => 'wrtgwgegwhg',
                    'CommentRating' => 5,
                    'createDate' => '2020-11-12 14:33:14',
                    'product_id' => 1,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                    'Username' => 'user1'

                ),
            9 =>
                array (
                    'id' => 21,
                    'FullComment' => 'moj komentar',
                    'CommentRating' => 4,
                    'createDate' => '2020-11-12 16:50:19',
                    'product_id' => 1,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                    'Username' => 'user1'

                ),
        ));
    }
}
