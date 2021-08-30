<?php

namespace Database\Seeders;

use App\Models\Country;
// use App\Providers\DataProviders\CountryProvider;
use Database\DataProviders\CountryProvider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('countries')->truncate();

        Country::insertOrIgnore(CountryProvider::data());

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
