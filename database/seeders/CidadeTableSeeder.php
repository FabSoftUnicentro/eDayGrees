<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(file_get_contents(dirname(__FILE__) . '/SQL Files/CidadeTableSeed.sql'));
    }
}
