<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado')->insert([[
            'nome' => 'Paraná',
            'uf' => 'PR',
            'pais' => 'Brasil'
        ], [
            'nome' => 'Rio Grande do Sul',
            'uf' => 'RS',
            'pais' => 'Brasil'
        ],[
            'nome' => 'Santa Catarina',
            'uf' => 'SC',
            'pais' => 'Brasil'
        ]]);
    }
}
