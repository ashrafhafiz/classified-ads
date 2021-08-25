<?php

namespace Database\Seeders;

use Carbon\Carbon;
// use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('categories')->truncate();

        $categories = [
            [
                'name' => 'Electronics',
                'slug' => 'electronics',
                'image' => 'public/images/categories/empty.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Furniture',
                'slug' => 'furniture',
                'image' => 'public/images/categories/empty.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Cars',
                'slug' => 'cars',
                'image' => 'public/images/categories/empty.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Fashion & Beauty',
                'slug' => 'fashion-beauty',
                'image' => 'public/images/categories/empty.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pets',
                'slug' => 'pets',
                'image' => 'public/images/categories/empty.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Services',
                'slug' => 'services',
                'image' => 'public/images/categories/empty.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jobs',
                'slug' => 'jobs',
                'image' => 'public/images/categories/empty.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Properities',
                'slug' => 'properities',
                'image' => 'public/images/categories/empty.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Two Wheelers',
                'slug' => 'two-wheelers',
                'image' => 'public/images/categories/empty.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        foreach ($categories as $key => $category) {
            DB::table('categories')->insert($category);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
