<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([CategoriesSeeder::class]);
        $this->command->info('Categories table seeded!');

        $this->call([SubCategoriesSeeder::class]);
        $this->command->info('Sub_Categories table seeded!');

        $this->call([ChildCategoriesSeeder::class]);
        $this->command->info('Child_Categories table seeded!');
    }
}
