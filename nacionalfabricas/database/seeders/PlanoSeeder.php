<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plano;

class PlanoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $planos = [
            [
                'nome' => 'Plano Starter',
                'slug' => 'plano-starter',
                'trial' => '14 dias',
                'recorrencia' => 'MONTHLY',
                'max_usuarios' => 1,
                'max_produtos' => 20,
                'valor' => 19.90,
                'descricao' => 'Até 20 itens na sua vitrine e sem membros extras.'
            ],
            [
                'nome' => 'Plano Starter',
                'slug' => 'plano-starter',
                'trial' => '14 dias',
                'recorrencia' => 'YEARLY',
                'max_usuarios' => 1,
                'max_produtos' => 20,
                'valor' => 229.90,
                'descricao' => 'Até 20 itens na sua vitrine e sem membros extras.'
            ],
            [
                'nome' => 'Plano Pro',
                'slug' => 'plano-pro',
                'trial' => '14 dias',
                'recorrencia' => 'MONTHLY',
                'max_usuarios' => 1,
                'max_produtos' => 50,
                'valor' => 39.90,
                'descricao' => 'Até 50 itens na sua vitrine e 1 membro extra.'
            ],
            [
                'nome' => 'Plano Pro',
                'slug' => 'plano-pro',
                'trial' => '14 dias',
                'recorrencia' => 'YEARLY',
                'max_usuarios' => 1,
                'max_produtos' => 50,
                'valor' => 459.90,
                'descricao' => 'Até 50 itens na sua vitrine e 1 membro extra.'
            ],
            [
                'nome' => 'Plano Plus',
                'slug' => 'plano-plus',
                'trial' => '14 dias',
                'recorrencia' => 'MONTHLY',
                'max_usuarios' => 2,
                'max_produtos' => 100,
                'valor' => 79.90,
                'descricao' => 'Até 100 itens na sua vitrine e 2 membros extras.'
            ],
            [
                'nome' => 'Plano Plus',
                'slug' => 'plano-plus',
                'trial' => '14 dias',
                'recorrencia' => 'YEARLY',
                'max_usuarios' => 2,
                'max_produtos' => 100,
                'valor' => 919.90,
                'descricao' => 'Até 100 itens na sua vitrine e 2 membros extras.'
            ],
        ];

        foreach ($planos as $plano) {
            Plano::create($plano);
        }
    }
}
