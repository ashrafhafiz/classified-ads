<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('sub_categories')->truncate();

        $sub_categories = [
            [
                'category_id' => 1,
                'name' => 'Computers',
                'slug' => 'computers',
                'image' => '',
                // 'created_at' => Carbon::now(),
            ],
            [
                'category_id' => 1,
                'name' => 'TVs',
                'slug' => 'tvs',
                'image' => '',
                // 'created_at' => Carbon::now(),
            ]
        ];

        foreach ($sub_categories as $key => $sub_category) {
            // DB::table('sub_categories')->insert($sub_category);
            SubCategory::create($sub_category);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
