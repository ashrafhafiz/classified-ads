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
                'image' => 'public/images/categories/no_image_available.png',
            ],
            [
                'name' => 'Fashion',
                'slug' => 'fashion',
                'image' => 'public/images/categories/no_image_available.png',
            ],
            [
                'name' => 'Home & Garden',
                'slug' => 'home-garden',
                'image' => 'public/images/categories/no_image_available.png',
            ],
            [
                'name' => 'Moto',
                'slug' => 'moto',
                'image' => 'public/images/categories/no_image_available.png',
            ],
            [
                'name' => 'Properties & Real Estate',
                'slug' => 'properties-real-estate',
                'image' => 'public/images/categories/no_image_available.png',
            ],
            [
                'name' => 'Sports & Outdoors',
                'slug' => 'sports-outdoors',
                'image' => 'public/images/categories/no_image_available.png',
            ],
            [
                'name' => 'Pets',
                'slug' => 'pets',
                'image' => 'public/images/categories/no_image_available.png',
            ],
            [
                'name' => 'Services',
                'slug' => 'services',
                'image' => 'public/images/categories/no_image_available.png',
            ],
            [
                'name' => 'Jobs',
                'slug' => 'jobs',
                'image' => 'public/images/categories/no_image_available.png',
            ]
        ];

        foreach ($categories as $key => $category) {
            DB::table('categories')->insert($category);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
