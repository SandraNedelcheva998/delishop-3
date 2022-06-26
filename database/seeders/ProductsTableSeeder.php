<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->delete();

        DB::table('products')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'ProductName' => 'Broccoli Cheese Soup',
                    'ProductImageURL' => 'https://fitfoodiefinds.com/wp-content/uploads/2015/02/broccoli-soup.jpg',
                    'ProductDescription' => 'The broccoli cheese soup of your dreams…that’s actually healthy! Made with roasted broccoli and cauliflower, garlic, and white cheddar cheese, this broccoli and cheese soup needs to be added to your rotation.',
                    'ProductIngredients' => '2 broccolis,250 grams of Gruiere cheese,salt,pepper',
                    'ProductPrice' => 12,
                    'ProductStock' => 20,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime
                ),
            1 =>
                array (
                    'id' => 2,
                    'ProductName' => 'Chicken Noodle Soup',
                    'ProductImageURL' => 'https://fitfoodiefinds.com/wp-content/uploads/2019/01/chicken-noodle-soup.jpg',
                    'ProductDescription' => 'The best chicken noodle soup recipe is made with hearty vegetables, chicken breast, and your favorite noodle. Plus, it’s ready to go in less than an hour!',
                    'ProductIngredients' => '2 broccolis,250 grams of Gruiere cheese,salt,pepper',
                    'ProductPrice' => 12,
                    'ProductStock' => 20,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            2 =>
                array (
                    'id' => 4,
                    'ProductName' => 'Tomato Soup',
                    'ProductImageURL' => 'https://fitfoodiefinds.com/wp-content/uploads/2018/09/soup-6-683x1024.jpg',
                    'ProductDescription' => 'This flavorful Tomato Bisque Soup is made in under 20 minutes. Made with Greek yogurt and fresh basil, you’ll get all the flavor with a healthy twist!',
                    'ProductIngredients' => '2 tomatoes,1 potato,salt,pepper',
                    'ProductPrice' => 10,
                    'ProductStock' => 20,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            3 =>
                array (
                    'id' => 5,
                    'ProductName' => 'Spicy Pumpkin Soup',
                    'ProductImageURL' => 'https://fitfoodiefinds.com/wp-content/uploads/2017/10/butternut-squash-soup-650x975.jpg',
                    'ProductDescription' => 'Instant Pot Butternut Squash Soup that’s ready in less than 30 minutes! ',
                    'ProductIngredients' => '2 tablespoons olive oil,1 medium yellow onion, chopped 4 cloves garlic, peeled and smashed 1 large pumpkin, quartered, 2 cups vegetable broth, 1/2 teaspoon salt, 1/2 teaspoon pepper, 1/4 ground teaspoon cinnamon, 1/2 teaspoon apple cider vinegar,',
                    'ProductPrice' => 12,
                    'ProductStock' => 20,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            4 =>
                array (
                    'id' => 6,
                    'ProductName' => 'Pesto Chicken Pasta',
                    'ProductImageURL' => 'https://fitfoodiefinds.com/wp-content/uploads/2019/08/pesto-chicken-3.jpg',
                    'ProductDescription' => 'You can’t go wrong with a bowl of pesto chicken pasta for dinner! This chicken pesto pasta is ready in under 30 minutes and is packed fresh flavors!',
                    'ProductIngredients' => 'Penne pasta,Salt,Olive oil,Chicken breast,Italian seasoning,Yellow onion,Garlic,Chicken broth,Cherry tomatoes Starchy water Pesto Ground pepper',
                    'ProductPrice' => 13,
                    'ProductStock' => 20,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            5 =>
                array (
                    'id' => 7,
                    'ProductName' => 'Sweet Potato Spinach Lasagna',
                    'ProductImageURL' => 'https://fitfoodiefinds.com/wp-content/uploads/2016/02/sweet-potato-spinach-lasagna21.png',
                    'ProductDescription' => 'Amp up classic lasagna and pack it full of veggies for a hearty yet healthy dinner recipe that’s perfect for Meatless Monday!',
                    'ProductIngredients' => 'milk ricotta, cottage cheese, sweet potato puree, fresh rosemary,  olive oil, yellow onion, spinach, marinara sauce, dried oregano,garlic powder, pinch of black pepper, pinch of sea salt, lasagna noodles, mozzarella cheese',
                    'ProductPrice' => 12,
                    'ProductStock' => 20,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            6 =>
                array (
                    'id' => 8,
                    'ProductName' => 'Caramel Apple Cinnamon Waffles',
                    'ProductImageURL' => 'https://fitfoodiefinds.com/wp-content/uploads/2016/12/apple-cinnamon-waffles.png',
                    'ProductDescription' => '‘Tis the season of apples and cinnamon!',
                    'ProductIngredients' => 'white wheat pastry flour, apples diced, cinnamon, salt,  eggs , vanilla extract, maple syrup, coconut oil, unsweetened milk, coconut milk, maple syrup, vanilla extract, vanilla bean, pinch of fine sea salt',
                    'ProductPrice' => 13,
                    'ProductStock' => 20,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            7 =>
                array (
                    'id' => 9,
                    'ProductName' => 'Carrot Cake Pancakes',
                    'ProductImageURL' => 'https://fitfoodiefinds.com/wp-content/uploads/2019/02/Carrot-Cake-Pancakes-55.jpg',
                    'ProductDescription' => 'It’s time to make the best gluten free pancakes you’ve ever tasted! Our carrot cake pancakes are made with ground oat flour, carrot cake spices, and freshly grated carrots. Whip up a batch for breakfast today or meal prep to enjoy throughout the week!',
                    'ProductIngredients' => '1 cup ground oatall-purpose gluten-free flour , salt, carrot, cinnamon, ginger, nutmeg, eggs, unsweetened applesauce, unsweetened milk, maple syrup, vanilla extract, coconut oil',
                    'ProductPrice' => 13,
                    'ProductStock' => 20,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            8 =>
                array (
                    'id' => 10,
                    'ProductName' => 'Chocolate Chia Seed Pudding',
                    'ProductImageURL' => 'https://fitfoodiefinds.com/wp-content/uploads/2019/03/chocolate-chia-seed-pudding-683x1024.jpg',
                    'ProductDescription' => 'Looking for a dairy-free dessert that the whole family will love? Whip up this easy Chocolate Chia Seed Pudding Recipe with just a few clean ingredients and no refined sugar. Enjoy!',
                    'ProductIngredients' => 'cocoa powder,  chia seeds, maple syrup, milk, sea salt',
                    'ProductPrice' => 10,
                    'ProductStock' => 20,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            9 =>
                array (
                    'id' => 11,
                    'ProductName' => 'Cornbread',
                    'ProductImageURL' => 'https://fitfoodiefinds.com/wp-content/uploads/2019/11/cornbread-4-683x1024.jpg',
                    'ProductDescription' => 'The most flavorful Skillet Cornbread made healthier with finely-ground cornmeal, white whole wheat flour, honey, and coconut oil.',
                    'ProductIngredients' => '2 tablespoons butter 1.5 cups finely growhite whole wheat flour, eggs, Greek yogurt, unsweetened almond milk , honey ,coconut oil',
                    'ProductPrice' => 10,
                    'ProductStock' => 20,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            10 =>
                array (
                    'id' => 12,
                    'ProductName' => 'Strawberry Banana Bread',
                    'ProductImageURL' => 'https://fitfoodiefinds.com/wp-content/uploads/2013/05/bread-1-683x1024.jpg',
                    'ProductDescription' => 'Make our moist strawberry banana bread all summer long with fresh strawberries, bananas, white whole wheat flour, and little honey. Your kids will love this strawberry bread and BONUS, it’s healthy!',
                    'ProductIngredients' => 'white whole wheat flour, coconut palm sugar, strawberries, banana, vanilla extract, unsweetened almond milk, honey, eggs, coconut oil',
                    'ProductPrice' => 13,
                    'ProductStock' => 20,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            11 =>
                array (
                    'id' => 13,
                    'ProductName' => 'Chocolate Chocolate Chip Banana Bread',
                    'ProductImageURL' => 'https://fitfoodiefinds.com/wp-content/uploads/2018/12/bread-copy-683x1024.jpg',
                    'ProductDescription' => 'Chocolate Chocolate Chip Banana Bread – the loaf recipe that keeps on giving. If you love classic banana bread, then this healthy chocolate chocolate chip banana bread recipe is going to knock your socks off!',
                    'ProductIngredients' => 'white whole wheat flour,brown sugar (or coconut sugar), cocoa powder, salt, chocolate chips',
                    'ProductPrice' => 12,
                    'ProductStock' => 20,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            12 =>
                array (
                    'id' => 14,
                    'ProductName' => 'Zucchini Bread',
                    'ProductImageURL' => 'https://fitfoodiefinds.com/wp-content/uploads/2020/09/zucchini-bread-650x975.jpg',
                    'ProductDescription' => 'Make yourself a loaf of healthy zucchini bread made with 100% whole grains and no butter! This zucchini bread is perfect for an easy breakfast or an easy snack in the afternoon!',
                    'ProductIngredients' => 'white whole wheat flour, coconut sugar, salt, zucchini, eggs, maple syrup, unsweetened almond milk, banana, coconut oil',
                    'ProductPrice' => 12,
                    'ProductStock' => 20,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
            13 =>
                array (
                    'id' => 3,
                    'ProductName' => 'Chicken Noodle Soup',
                    'ProductImageURL' => 'https://fitfoodiefinds.com/wp-content/uploads/2019/01/chicken-noodle-soup.jpg',
                    'ProductDescription' => 'The best chicken noodle soup recipe is made with hearty vegetables, chicken breast, and your favorite noodle. Plus, it’s ready to go in less than an hour!',
                    'ProductIngredients' => '2 broccolis,250 grams of Gruiere cheese,salt,pepper',
                    'ProductPrice' => 12,
                    'ProductStock' => 20,
                    'created_at' => new DateTime,
                    'updated_at' => new DateTime,
                ),
        ));

    }
}
