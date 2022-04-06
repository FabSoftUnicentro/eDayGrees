<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoencasSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    private $escoriose = 'Periodo com probabilidade de ocorrência de Escoriose, observar vinhedo e realizar medidas de controle, como por exemplo tratamentos preventivos';

    #private $Mildio = 'Periodo com probabilidade de ocorrência de Míldio, observar vinhedo e realizar medidas de controle, como por exemplo tratamentos preventivos';
    public function run()
    {
        DB::table('doencas')->insert([[
            'estado_fenologico' => 'Gema algodão',
            'temperatura' => 9,
            'umidade' => 95,
            'periodo_de_molhamento' => 12,
            'condicao_secundaria' => '',
            'nome_doenca' => 'Escoriose',
            'aviso_usuario' => $this->escoriose
        ], [
            'estado_fenologico' => 'Brotação',
            'temperatura' => 9,
            'umidade' => 95,
            'periodo_de_molhamento' => 12,
            'condicao_secundaria' => '',
            'nome_doenca' => 'Escoriose',
            'aviso_usuario' => $this->escoriose
        ]]);
    }
}
