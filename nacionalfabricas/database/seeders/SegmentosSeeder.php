<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SegmentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $segmentos = [
                           
            [ 
                'codigo' => '10'	
                ,'nomeSegmento' => 'Alimentos'	
            ],

            [ 
                'codigo' => '11'	
                ,'nomeSegmento' => 'Bebidas'	
            ],

            [ 
                'codigo' => '12'	
                ,'nomeSegmento' => 'Fumo'	
            ],

            [ 
                'codigo' => '13'	
                ,'nomeSegmento' => 'Produtos Têxteis'	
            ],

            [ 
                'codigo' => '14'	
                ,'nomeSegmento' => 'Vestuário e acessórios'	
            ],

            [ 
                'codigo' => '15'	
                ,'nomeSegmento' => 'Couro e calçados'	
            ],
            [ 
                'codigo' => '16'	
                ,'nomeSegmento' => 'Madeira'	
            ],

            [ 
                'codigo' => '17'	
                ,'nomeSegmento' => 'Celulose e papel'	
            ],

            [ 
                'codigo' => '18'	
                ,'nomeSegmento' => 'Impressão e reprodução'	
            ],

            [ 
                'codigo' => '19'	
                ,'nomeSegmento' => 'Coque, derivados do petróleo e biocombústíveis'	
            ],

            [ 
                'codigo' => '20'	
                ,'nomeSegmento' => 'Químicos'	
            ],

            [ 
                'codigo' => '21'	
                ,'nomeSegmento' => 'Farmoquímicos e farmacêuticos'	
            ],

            [ 
                'codigo' => '22'	
                ,'nomeSegmento' => 'Borracha e material plástico'	
            ],
            [ 
                'codigo' => '23'	
                ,'nomeSegmento' => 'Produtos de minerais não-metálicos'	
            ],

            [ 
                'codigo' => '24'	
                ,'nomeSegmento' => 'Metalurgia'	
            ],

            [ 
                'codigo' => '25'	
                ,'nomeSegmento' => 'Produtos de metal'	
            ],

            [ 
                'codigo' => '26'	
                ,'nomeSegmento' => 'Equipamentos de informática, produtos eletrônicos e ópticos'	
            ],

            [ 
                'codigo' => '27'	
                ,'nomeSegmento' => 'Máquinas, aparelhos e materias elétricos'	
            ],

            [ 
                'codigo' => '28'	
                ,'nomeSegmento' => 'Máquinas e equipamentos'	
            ],
            [ 
                'codigo' => '29'	
                ,'nomeSegmento' => 'Veículos automotores'	
            ],

            [ 
                'codigo' => '30'	
                ,'nomeSegmento' => 'Outros equipaentos de transporte'	
            ],

            [ 
                'codigo' => '31'	
                ,'nomeSegmento' => 'Móveis'	
            ],

            [ 
                'codigo' => '32'	
                ,'nomeSegmento' => 'Produtos diversos'	
            ],
            [ 
                'codigo' => '33'	
                ,'nomeSegmento' => 'Manutenção, reparação e instalação de máquinas e equipamentos'	
            ],

            	
            
        ];

        DB::table('segmentos')->insert($segmentos);    }
}
