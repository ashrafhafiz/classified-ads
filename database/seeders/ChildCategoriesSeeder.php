<?php

namespace Database\Seeders;

use App\Models\ChildCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChildCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('child_categories')->truncate();

        $child_categories = [
            [
                'sub_category_id' => 1,
                'name' => 'Desktops',
                'slug' => 'desktops',
                'image' => '',
            ],
            [
                'sub_category_id' => 1,
                'name' => 'Laptops',
                'slug' => 'laptops',
                'image' => '',
            ]
        ];

        foreach ($child_categories as $key => $child_category) {
            ChildCategory::create($child_category);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
