<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->delete();

        DB::table('categories')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'CategoryName' => 'Soups',
                    'CategoryImageUrl' => 'https://fitfoodiefinds.com/wp-content/uploads/2019/01/chicken-noodle-soup.jpg',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            1 =>
                array (
                    'id' => 2,
                    'CategoryName' => 'Main Courses',
                    'CategoryImageUrl' => 'https://fitfoodiefinds.com/wp-content/uploads/2019/08/pesto-chicken-3.jpg',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            2 =>
                array (
                    'id' => 3,
                    'CategoryName' => 'Desserts',
                    'CategoryImageUrl' => 'https://fitfoodiefinds.com/wp-content/uploads/2016/12/apple-cinnamon-waffles.png',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            3 =>
                array (
                    'id' => 4,
                    'CategoryName' => 'Breads',
                    'CategoryImageUrl' => 'https://fitfoodiefinds.com/wp-content/uploads/2019/11/cornbread-4-683x1024.jpg',
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),

        ));
    }
}
