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
        // $this->call([CategoriesSeeder::class]);
        // $this->command->info('Categories table seeded!');

        // $this->call([SubCategoriesSeeder::class]);
        // $this->command->info('Sub_Categories table seeded!');

        // $this->call([ChildCategoriesSeeder::class]);
        // $this->command->info('Child_Categories table seeded!');

        $this->call([CountriesSeeder::class]);
        $this->command->info('Countries table seeded!');

        $this->call([StatesSeeder::class]);
        $this->command->info('States table seeded!');

        $this->call([CitiesSeeder::class]);
        $this->command->info('Cities table seeded!');
    }
}
