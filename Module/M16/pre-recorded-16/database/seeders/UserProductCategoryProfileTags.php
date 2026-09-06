<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserProductCategoryProfileTags extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // =========================
        // Users
        // =========================

        $users = [
            [
                'name' => 'panda',
                'email' => 'panda@gmail.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'fox',
                'email' => 'fox@gmail.com',
                'password' => bcrypt('password'),
            ],
        ];

        DB::table('users')->insert($users);


        // =========================
        // Profiles
        // =========================

        $profiles = [
            [
                'user_id' => 1,
                'bio' => 'This is my panda profile',
                'avatar' => 'uploads/avatars/user_1.jpg',
            ],
            [
                'user_id' => 2,
                'bio' => 'This is my fox profile',
                'avatar' => 'uploads/avatars/user_2.jpg',
            ],
        ];

        DB::table('profiles')->insert($profiles);


        // =========================
        // Categories
        // =========================

        $categories = [
            [
                'name' => 'Electronics',
            ],
            [
                'name' => 'Fashion',
            ],
        ];

        DB::table('categories')->insert($categories);


        // =========================
        // Tags
        // =========================

        $tags = [
            [
                'name' => 'New',
            ],
            [
                'name' => 'Old',
            ],
        ];

        DB::table('tags')->insert($tags);


        // =========================
        // Products
        // =========================

        $products = [
            [
                'name' => 'iPhone 17 Pro',
                'description' => 'Apple iPhone 17 Pro with powerful performance and premium design.',
                'price' => 129999.00,
                'category_id' => 1,
            ],
            [
                'name' => 'Samsung Galaxy S26',
                'description' => 'Samsung Galaxy S26 with advanced camera and high performance.',
                'price' => 99999.00,
                'category_id' => 1,
            ],
            [
                'name' => 'MacBook Air M4',
                'description' => 'Apple MacBook Air powered by the M4 chip.',
                'price' => 145000.00,
                'category_id' => 1,
            ],
            [
                'name' => 'T-Shirt',
                'description' => 'Premium cotton t-shirt.',
                'price' => 1200.00,
                'category_id' => 2,
            ],
        ];

        DB::table('products')->insert($products);


        // =========================
        // Product Tags
        // =========================

        $productTags = [
            [
                'product_id' => 1,
                'tag_id' => 1,
            ],
            [
                'product_id' => 1,
                'tag_id' => 2,
            ],
            [
                'product_id' => 2,
                'tag_id' => 1,
            ],
            [
                'product_id' => 3,
                'tag_id' => 1,
            ],
            [
                'product_id' => 4,
                'tag_id' => 2,
            ],
        ];

        DB::table('product_tag')->insert($productTags);
    }
}
