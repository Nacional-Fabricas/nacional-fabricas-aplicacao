<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estados = [

            ['sigla' => 'RO'
            , 'nome' => 'Rondônia'
            , 'regiao' => 'Norte'
            ],

            [
            'sigla' => 'AC'
            , 'nome' => 'Acre'
            , 'regiao' =>  'Norte'
            ],

            [ 'sigla' => 'AM'
            , 'nome' => 'Amazonas'
            , 'regiao' => 'Norte'
            ],

            [ 'sigla' => 'RR'
            , 'nome' => 'Roraima'
            , 'regiao' =>  'Norte'
            ],

            [ 'sigla' => 'PA'
            , 'nome' => 'Pará'
            , 'regiao' => 'Norte'
            ],

            [ 'sigla' => 'AP'
            , 'nome' => 'Amapá'
            , 'regiao' =>  'Norte'
            ],

            [ 'sigla' => 'TO'
            , 'nome' => 'Tocantins'
            , 'regiao' => 'Norte'
            ],

            [
            'sigla' => 'MA'
            , 'nome' => 'Maranhão'
            , 'regiao' => 'Nordeste'],

            [
            'sigla' => 'PI'
            , 'nome' => 'Piauí'
            , 'regiao' => 'Nordeste'
            ],

            [
            'sigla' => 'CE'
            , 'nome' => 'Ceará'
            , 'regiao' => 'Nordeste'
            ],

            [
            'sigla' => 'RN'
            , 'nome' => 'Rio Grande do Norte'
            , 'regiao' => 'Nordeste'
            ],

            [
            'sigla' => 'PB'
            , 'nome' => 'Paraíba'
            , 'regiao' => 'Nordeste'
            ],

            [
            'sigla' => 'PE'
            , 'nome' => 'Pernambuco'
            , 'regiao' => 'Nordeste'
            ],

            [
            'sigla' => 'AL'
            , 'nome' => 'Alagoas'
            , 'regiao' => 'Nordeste'
            ],

            [
            'sigla' => 'SE'
            , 'nome' => 'Sergipe'
            , 'regiao' => 'Nordeste'
            ],

            [
            'sigla' => 'BA'
            , 'nome' => 'Bahia'
            , 'regiao' => 'Nordeste'
            ],

            [
            'sigla' => 'MG'
            , 'nome' => 'Minas Gerais'
            , 'regiao' => 'Sudeste'
            ],

            [
            'sigla' => 'ES'
            , 'nome' => 'Espírito Santo'
            , 'regiao' => 'Sudeste'
            ],

            [
            'sigla' => 'RJ'
            , 'nome' => 'Rio de Janeiro'
            , 'regiao' => 'Sudeste'
            ],

            [
            'sigla' => 'SP'
            , 'nome' => 'São Paulo'
            , 'regiao' => 'Sudeste'
            ],

            [
            'sigla' => 'PR'
            , 'nome' => 'Paraná'
            , 'regiao' => 'Sul'],

            [
            'sigla' => 'SC'
            , 'nome' => 'Santa Catarina'
            , 'regiao' => 'Sul'
            ],

            [
            'sigla' => 'RS'
            , 'nome' => 'Rio Grande do Sul'
            , 'regiao' => 'Sul'
            ],

            [
            'sigla' => 'MS'
            , 'nome' => 'Mato Grosso do Sul'
            , 'regiao' => 'Centro-Oeste'
            ],

            [
            'sigla' => 'MT'
            , 'nome' => 'Mato Grosso'
            , 'regiao' => 'Centro-Oeste'
            ],

            [
            'sigla' => 'GO'
            , 'nome' => 'Goiás'
            , 'regiao' => 'Centro-Oeste'
            ],

            [
            'sigla' => 'DF'
            , 'nome' => 'Distrito Federal'
            , 'regiao' => 'Centro-Oeste'
            ],


        ];

        DB::table('estados')->insert($estados);

    }
}
