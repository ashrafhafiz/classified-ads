<?php

namespace Database\Seeders;

use App\Models\State;
use Database\DataProviders\StateProvider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('states')->truncate();

        State::insertOrIgnore(StateProvider::data());

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
