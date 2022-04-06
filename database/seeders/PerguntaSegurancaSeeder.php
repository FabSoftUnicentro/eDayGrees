<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerguntaSegurancaSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perguntas_de_seguranca')->insert([[
            'perguntas' => 'Qual nome do seu primeiro cachorro?'
        ], [
            'perguntas' => 'Qual foi seu primeiro carro?'
        ], [
            'perguntas' => 'Quantos anos você tinha quando deu seu primeiro beijo?'
        ], [
            'perguntas' => 'Emprego dos sonhos?'
        ], [
            'perguntas' => 'Qual o nome do seu melhor amigo?'
        ]]);
    }
}
