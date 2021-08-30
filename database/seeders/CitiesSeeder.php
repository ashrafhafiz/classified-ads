<?php

namespace Database\Seeders;

use App\Models\City;
use Database\DataProviders\CityProvider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('cities')->truncate();

        foreach (collect(CityProvider::data())->chunk(15000) as $chunkCities) {
            City::insertOrIgnore($chunkCities->toArray());
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
