<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CnaeLista;
use Illuminate\Support\Facades\DB;



class CnaeListaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $cnaes = [

            [
                'cnae_id' => '0111301',
                'cnae_description' => 'CULTIVO DE ARROZ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' =>date('Y-m-d H:i:s')
            ],

            [
                'cnae_id' => '0111302',
                'cnae_description' =>  'CULTIVO DE MILHO',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

            [
                'cnae_id' => '0111303',
                'cnae_description' => 'CULTIVO DE TRIGO',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],

    [
    'cnae_id' => '0111399',
    'cnae_description' => 'CULTIVO DE OUTROS CEREAIS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0112101',
    'cnae_description' => 'CULTIVO DE ALGODÃO HERBÁCEO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0112102',
    'cnae_description' => 'CULTIVO DE JUTA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0112199',
    'cnae_description' => 'CULTIVO DE OUTRAS FIBRAS DE LAVOURA TEMPORÁRIA NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0113000',
    'cnae_description' => 'CULTIVO DE CANA DE AÇÚCAR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0114800',
    'cnae_description' => 'CULTIVO DE FUMO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0115600',
    'cnae_description' => 'CULTIVO DE SOJA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0116401',
    'cnae_description' => 'CULTIVO DE AMENDOIM',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0116402',
    'cnae_description' => 'CULTIVO DE GIRASSOL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0116403',
    'cnae_description' => 'CULTIVO DE MAMONA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0116499',
    'cnae_description' => 'CULTIVO DE OUTRAS OLEAGINOSAS DE LAVOURA TEMPORÁRIA NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0119901',
    'cnae_description' => 'CULTIVO DE ABACAXI',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0119902',
    'cnae_description' => 'CULTIVO DE ALHO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0119903',
    'cnae_description' => 'CULTIVO DE BATATA INGLESA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0119904',
    'cnae_description' => 'CULTIVO DE CEBOLA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0119905',
    'cnae_description' => 'CULTIVO DE FEIJÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0119906',
    'cnae_description' => 'CULTIVO DE MANDIOCA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0119907',
    'cnae_description' => 'CULTIVO DE MELÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0119908',
    'cnae_description' => 'CULTIVO DE MELANCIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0119909',
    'cnae_description' => 'CULTIVO DE TOMATE RASTEIRO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0119999',
    'cnae_description' => 'CULTIVO DE OUTRAS PLANTAS DE LAVOURA TEMPORÁRIA NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0121101',
    'cnae_description' => 'HORTICULTURA, EXCETO MORANGO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0121102',
    'cnae_description' => 'CULTIVO DE MORANGO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0122900',
    'cnae_description' => 'CULTIVO DE FLORES E PLANTAS ORNAMENTAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0131800',
    'cnae_description' => 'CULTIVO DE LARANJA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0132600',
    'cnae_description' => 'CULTIVO DE UVA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0133401',
    'cnae_description' => 'CULTIVO DE AÇAÍ',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0133402',
    'cnae_description' => 'CULTIVO DE BANANA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0133403',
    'cnae_description' => 'CULTIVO DE CAJU',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0133404',
    'cnae_description' => 'CULTIVO DE CÍTRICOS, EXCETO LARANJA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0133405',
    'cnae_description' => 'CULTIVO DE COCO DA BAÍA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0133406',
    'cnae_description' => 'CULTIVO DE GUARANÁ',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0133407',
    'cnae_description' => 'CULTIVO DE MAÇÃ',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0133408',
    'cnae_description' => 'CULTIVO DE MAMÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0133409',
    'cnae_description' => 'CULTIVO DE MARACUJÁ',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0133410',
    'cnae_description' => 'CULTIVO DE MANGA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0133411',
    'cnae_description' => 'CULTIVO DE PÊSSEGO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0133499',
    'cnae_description' => 'CULTIVO DE FRUTAS DE LAVOURA PERMANENTE NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0134200',
    'cnae_description' => 'CULTIVO DE CAFÉ',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0135100',
    'cnae_description' => 'CULTIVO DE CACAU',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0139301',
    'cnae_description' => 'CULTIVO DE CHÁ DA ÍNDIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0139302',
    'cnae_description' => 'CULTIVO DE ERVA MATE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0139303',
    'cnae_description' => 'CULTIVO DE PIMENTA DO REINO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0139304',
    'cnae_description' => 'CULTIVO DE PLANTAS PARA CONDIMENTO, EXCETO PIMENTA DO REINO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0139305',
    'cnae_description' => 'CULTIVO DE DENDÊ',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0139306',
    'cnae_description' => 'CULTIVO DE SERINGUEIRA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0139399',
    'cnae_description' => 'CULTIVO DE OUTRAS PLANTAS DE LAVOURA PERMANENTE NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0141501',
    'cnae_description' => 'PRODUÇÃO DE SEMENTES CERTIFICADAS, EXCETO DE FORRAGEIRAS PARA PASTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0141502',
    'cnae_description' => 'PRODUÇÃO DE SEMENTES CERTIFICADAS DE FORRAGEIRAS PARA FORMAÇÃO DE PASTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0142300',
    'cnae_description' => 'PRODUÇÃO DE MUDAS E OUTRAS FORMAS DE PROPAGAÇÃO VEGETAL, CERTIFICADAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0151201',
    'cnae_description' => 'CRIAÇÃO DE BOVINOS PARA CORTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0151202',
    'cnae_description' => 'CRIAÇÃO DE BOVINOS PARA LEITE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0151203',
    'cnae_description' => 'CRIAÇÃO DE BOVINOS, EXCETO PARA CORTE E LEITE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0152101',
    'cnae_description' => 'CRIAÇÃO DE BUFALINOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0152102',
    'cnae_description' => 'CRIAÇÃO DE EQÜINOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0152103',
    'cnae_description' => 'CRIAÇÃO DE ASININOS E MUARES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0153901',
    'cnae_description' => 'CRIAÇÃO DE CAPRINOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0153902',
    'cnae_description' => 'CRIAÇÃO DE OVINOS, INCLUSIVE PARA PRODUÇÃO DE LÃ',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0154700',
    'cnae_description' => 'CRIAÇÃO DE SUÍNOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0155501',
    'cnae_description' => 'CRIAÇÃO DE FRANGOS PARA CORTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0155502',
    'cnae_description' => 'PRODUÇÃO DE PINTOS DE UM DIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0155503',
    'cnae_description' => 'CRIAÇÃO DE OUTROS GALINÁCEOS, EXCETO PARA CORTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0155504',
    'cnae_description' => 'CRIAÇÃO DE AVES, EXCETO GALINÁCEOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0155505',
    'cnae_description' => 'PRODUÇÃO DE OVOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0159801',
    'cnae_description' => 'APICULTURA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0159802',
    'cnae_description' => 'CRIAÇÃO DE ANIMAIS DE ESTIMAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0159803',
    'cnae_description' => 'CRIAÇÃO DE ESCARGÔ',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0159804',
    'cnae_description' => 'CRIAÇÃO DE BICHO DA SEDA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0159899',
    'cnae_description' => 'CRIAÇÃO DE OUTROS ANIMAIS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0161001',
    'cnae_description' => 'SERVIÇO DE PULVERIZAÇÃO E CONTROLE DE PRAGAS AGRÍCOLAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0161002',
    'cnae_description' => 'SERVIÇO DE PODA DE ÁRVORES PARA LAVOURAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0161003',
    'cnae_description' => 'SERVIÇO DE PREPARAÇÃO DE TERRENO, CULTIVO E COLHEITA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0161099',
    'cnae_description' => 'ATIVIDADES DE APOIO À AGRICULTURA NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0162801',
    'cnae_description' => 'SERVIÇO DE INSEMINAÇÃO ARTIFICIAL DE ANIMAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0162802',
    'cnae_description' => 'SERVIÇO DE TOSQUIAMENTO DE OVINOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0162803',
    'cnae_description' => 'SERVIÇO DE MANEJO DE ANIMAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0162899',
    'cnae_description' => 'ATIVIDADES DE APOIO À PECUÁRIA NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0163600',
    'cnae_description' => 'ATIVIDADES DE PÓS COLHEITA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0170900',
    'cnae_description' => 'CAÇA E SERVIÇOS RELACIONADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0210101',
    'cnae_description' => 'CULTIVO DE EUCALIPTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0210102',
    'cnae_description' => 'CULTIVO DE ACÁCIA NEGRA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0210103',
    'cnae_description' => 'CULTIVO DE PINUS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0210104',
    'cnae_description' => 'CULTIVO DE TECA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0210105',
    'cnae_description' => 'CULTIVO DE ESPÉCIES MADEIREIRAS, EXCETO EUCALIPTO, ACÁCIA NEGRA, PINUS E TECA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0210106',
    'cnae_description' => 'CULTIVO DE MUDAS EM VIVEIROS FLORESTAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0210107',
    'cnae_description' => 'EXTRAÇÃO DE MADEIRA EM FLORESTAS PLANTADAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0210108',
    'cnae_description' => 'PRODUÇÃO DE CARVÃO VEGETAL - FLORESTAS PLANTADAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0210109',
    'cnae_description' => 'PRODUÇÃO DE CASCA DE ACÁCIA NEGRA - FLORESTAS PLANTADAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0210199',
    'cnae_description' => 'PRODUÇÃO DE PRODUTOS NÃO MADEIREIROS NÃO ESPECIFICADOS ANTERIORMENTE EM FLORESTAS PLANTADAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0220901',
    'cnae_description' => 'EXTRAÇÃO DE MADEIRA EM FLORESTAS NATIVAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0220902',
    'cnae_description' => 'PRODUÇÃO DE CARVÃO VEGETAL - FLORESTAS NATIVAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0220903',
    'cnae_description' => 'COLETA DE CASTANHA DO PARÁ EM FLORESTAS NATIVAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0220904',
    'cnae_description' => 'COLETA DE LÁTEX EM FLORESTAS NATIVAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0220905',
    'cnae_description' => 'COLETA DE PALMITO EM FLORESTAS NATIVAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0220906',
    'cnae_description' => 'CONSERVAÇÃO DE FLORESTAS NATIVAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0220999',
    'cnae_description' => 'COLETA DE PRODUTOS NÃO MADEIREIROS NÃO ESPECIFICADOS ANTERIORMENTE EM FLORESTAS NATIVAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0230600',
    'cnae_description' => 'ATIVIDADES DE APOIO À PRODUÇÃO FLORESTAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0311601',
    'cnae_description' => 'PESCA DE PEIXES EM ÁGUA SALGADA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0311602',
    'cnae_description' => 'PESCA DE CRUSTÁCEOS E MOLUSCOS EM ÁGUA SALGADA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0311603',
    'cnae_description' => 'COLETA DE OUTROS PRODUTOS MARINHOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0311604',
    'cnae_description' => 'ATIVIDADES DE APOIO À PESCA EM ÁGUA SALGADA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0312401',
    'cnae_description' => 'PESCA DE PEIXES EM ÁGUA DOCE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0312402',
    'cnae_description' => 'PESCA DE CRUSTÁCEOS E MOLUSCOS EM ÁGUA DOCE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0312403',
    'cnae_description' => 'COLETA DE OUTROS PRODUTOS AQUÁTICOS DE ÁGUA DOCE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0312404',
    'cnae_description' => 'ATIVIDADES DE APOIO À PESCA EM ÁGUA DOCE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0321301',
    'cnae_description' => 'CRIAÇÃO DE PEIXES EM ÁGUA SALGADA E SALOBRA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0321302',
    'cnae_description' => 'CRIAÇÃO DE CAMARÕES EM ÁGUA SALGADA E SALOBRA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0321303',
    'cnae_description' => 'CRIAÇÃO DE OSTRAS E MEXILHÕES EM ÁGUA SALGADA E SALOBRA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0321304',
    'cnae_description' => 'CRIAÇÃO DE PEIXES ORNAMENTAIS EM ÁGUA SALGADA E SALOBRA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0321305',
    'cnae_description' => 'ATIVIDADES DE APOIO À AQÜICULTURA EM ÁGUA SALGADA E SALOBRA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0321399',
    'cnae_description' => 'CULTIVOS E SEMICULTIVOS DA AQÜICULTURA EM ÁGUA SALGADA E SALOBRA NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0322101',
    'cnae_description' => 'CRIAÇÃO DE PEIXES EM ÁGUA DOCE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0322102',
    'cnae_description' => 'CRIAÇÃO DE CAMARÕES EM ÁGUA DOCE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0322103',
    'cnae_description' => 'CRIAÇÃO DE OSTRAS E MEXILHÕES EM ÁGUA DOCE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0322104',
    'cnae_description' => 'CRIAÇÃO DE PEIXES ORNAMENTAIS EM ÁGUA DOCE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0322105',
    'cnae_description' => 'RANICULTURA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0322106',
    'cnae_description' => 'CRIAÇÃO DE JACARÉ',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0322107',
    'cnae_description' => 'ATIVIDADES DE APOIO À AQÜICULTURA EM ÁGUA DOCE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0322199',
    'cnae_description' => 'CULTIVOS E SEMICULTIVOS DA AQÜICULTURA EM ÁGUA DOCE NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0500301',
    'cnae_description' => 'EXTRAÇÃO DE CARVÃO MINERAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0500302',
    'cnae_description' => 'BENEFICIAMENTO DE CARVÃO MINERAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0600001',
    'cnae_description' => 'EXTRAÇÃO DE PETRÓLEO E GÁS NATURAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0600002',
    'cnae_description' => 'EXTRAÇÃO E BENEFICIAMENTO DE XISTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0600003',
    'cnae_description' => 'EXTRAÇÃO E BENEFICIAMENTO DE AREIAS BETUMINOSAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0710301',
    'cnae_description' => 'EXTRAÇÃO DE MINÉRIO DE FERRO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0710302',
    'cnae_description' => 'PELOTIZAÇÃO, SINTERIZAÇÃO E OUTROS BENEFICIAMENTOS DE MINÉRIO DE FERRO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0721901',
    'cnae_description' => 'EXTRAÇÃO DE MINÉRIO DE ALUMÍNIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0721902',
    'cnae_description' => 'BENEFICIAMENTO DE MINÉRIO DE ALUMÍNIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0722701',
    'cnae_description' => 'EXTRAÇÃO DE MINÉRIO DE ESTANHO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0722702',
    'cnae_description' => 'BENEFICIAMENTO DE MINÉRIO DE ESTANHO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0723501',
    'cnae_description' => 'EXTRAÇÃO DE MINÉRIO DE MANGANÊS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0723502',
    'cnae_description' => 'BENEFICIAMENTO DE MINÉRIO DE MANGANÊS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0724301',
    'cnae_description' => 'EXTRAÇÃO DE MINÉRIO DE METAIS PRECIOSOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0724302',
    'cnae_description' => 'BENEFICIAMENTO DE MINÉRIO DE METAIS PRECIOSOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0725100',
    'cnae_description' => 'EXTRAÇÃO DE MINERAIS RADIOATIVOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0729401',
    'cnae_description' => 'EXTRAÇÃO DE MINÉRIOS DE NIÓBIO E TITÂNIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0729402',
    'cnae_description' => 'EXTRAÇÃO DE MINÉRIO DE TUNGSTÊNIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0729403',
    'cnae_description' => 'EXTRAÇÃO DE MINÉRIO DE NÍQUEL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0729404',
    'cnae_description' => 'EXTRAÇÃO DE MINÉRIOS DE COBRE, CHUMBO, ZINCO E OUTROS MINERAIS METÁLICOS NÃO FERROSOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0729405',
    'cnae_description' => 'BENEFICIAMENTO DE MINÉRIOS DE COBRE, CHUMBO, ZINCO E OUTROS MINERAIS METÁLICOS NÃO FERROSOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0810001',
    'cnae_description' => 'EXTRAÇÃO DE ARDÓSIA E BENEFICIAMENTO ASSOCIADO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0810002',
    'cnae_description' => 'EXTRAÇÃO DE GRANITO E BENEFICIAMENTO ASSOCIADO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0810003',
    'cnae_description' => 'EXTRAÇÃO DE MÁRMORE E BENEFICIAMENTO ASSOCIADO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0810004',
    'cnae_description' => 'EXTRAÇÃO DE CALCÁRIO E DOLOMITA E BENEFICIAMENTO ASSOCIADO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0810005',
    'cnae_description' => 'EXTRAÇÃO DE GESSO E CAULIM',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0810006',
    'cnae_description' => 'EXTRAÇÃO DE AREIA, CASCALHO OU PEDREGULHO E BENEFICIAMENTO ASSOCIADO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0810007',
    'cnae_description' => 'EXTRAÇÃO DE ARGILA E BENEFICIAMENTO ASSOCIADO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0810008',
    'cnae_description' => 'EXTRAÇÃO DE SAIBRO E BENEFICIAMENTO ASSOCIADO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0810009',
    'cnae_description' => 'EXTRAÇÃO DE BASALTO E BENEFICIAMENTO ASSOCIADO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0810010',
    'cnae_description' => 'BENEFICIAMENTO DE GESSO E CAULIM ASSOCIADO À EXTRAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0810099',
    'cnae_description' => 'EXTRAÇÃO E BRITAMENTO DE PEDRAS E OUTROS MATERIAIS PARA CONSTRUÇÃO E BENEFICIAMENTO ASSOCIADO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0891600',
    'cnae_description' => 'EXTRAÇÃO DE MINERAIS PARA FABRICAÇÃO DE ADUBOS, FERTILIZANTES E OUTROS PRODUTOS QUÍMICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0892401',
    'cnae_description' => 'EXTRAÇÃO DE SAL MARINHO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0892402',
    'cnae_description' => 'EXTRAÇÃO DE SAL GEMA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0892403',
    'cnae_description' => 'REFINO E OUTROS TRATAMENTOS DO SAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0893200',
    'cnae_description' => 'EXTRAÇÃO DE GEMAS (PEDRAS PRECIOSAS E SEMIPRECIOSAS)',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0899101',
    'cnae_description' => 'EXTRAÇÃO DE GRAFITA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0899102',
    'cnae_description' => 'EXTRAÇÃO DE QUARTZO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0899103',
    'cnae_description' => 'EXTRAÇÃO DE AMIANTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0899199',
    'cnae_description' => 'EXTRAÇÃO DE OUTROS MINERAIS NÃO METÁLICOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0910600',
    'cnae_description' => 'ATIVIDADES DE APOIO À EXTRAÇÃO DE PETRÓLEO E GÁS NATURAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0990401',
    'cnae_description' => 'ATIVIDADES DE APOIO À EXTRAÇÃO DE MINÉRIO DE FERRO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0990402',
    'cnae_description' => 'ATIVIDADES DE APOIO À EXTRAÇÃO DE MINERAIS METÁLICOS NÃO FERROSOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '0990403',
    'cnae_description' => 'ATIVIDADES DE APOIO À EXTRAÇÃO DE MINERAIS NÃO METÁLICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1011201',
    'cnae_description' => 'FRIGORÍFICO - ABATE DE BOVINOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1011202',
    'cnae_description' => 'FRIGORÍFICO - ABATE DE EQÜINOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1011203',
    'cnae_description' => 'FRIGORÍFICO - ABATE DE OVINOS E CAPRINOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1011204',
    'cnae_description' => 'FRIGORÍFICO - ABATE DE BUFALINOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1011205',
    'cnae_description' => 'MATADOURO - ABATE DE RESES SOB CONTRATO - EXCETO ABATE DE SUÍNOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1012101',
    'cnae_description' => 'ABATE DE AVES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1012102',
    'cnae_description' => 'ABATE DE PEQUENOS ANIMAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1012103',
    'cnae_description' => 'FRIGORÍFICO - ABATE DE SUÍNOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1012104',
    'cnae_description' => 'MATADOURO - ABATE DE SUÍNOS SOB CONTRATO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1013901',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS DE CARNE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1013902',
    'cnae_description' => 'PREPARAÇÃO DE SUBPRODUTOS DO ABATE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1020101',
    'cnae_description' => 'PRESERVAÇÃO DE PEIXES, CRUSTÁCEOS E MOLUSCOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1020102',
    'cnae_description' => 'FABRICAÇÃO DE CONSERVAS DE PEIXES, CRUSTÁCEOS E MOLUSCOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1031700',
    'cnae_description' => 'FABRICAÇÃO DE CONSERVAS DE FRUTAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1032501',
    'cnae_description' => 'FABRICAÇÃO DE CONSERVAS DE PALMITO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1032599',
    'cnae_description' => 'FABRICAÇÃO DE CONSERVAS DE LEGUMES E OUTROS VEGETAIS, EXCETO PALMITO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1033301',
    'cnae_description' => 'FABRICAÇÃO DE SUCOS CONCENTRADOS DE FRUTAS, HORTALIÇAS E LEGUMES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1033302',
    'cnae_description' => 'FABRICAÇÃO DE SUCOS DE FRUTAS, HORTALIÇAS E LEGUMES, EXCETO CONCENTRADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1041400',
    'cnae_description' => 'FABRICAÇÃO DE ÓLEOS VEGETAIS EM BRUTO, EXCETO ÓLEO DE MILHO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1042200',
    'cnae_description' => 'FABRICAÇÃO DE ÓLEOS VEGETAIS REFINADOS, EXCETO ÓLEO DE MILHO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1043100',
    'cnae_description' => 'FABRICAÇÃO DE MARGARINA E OUTRAS GORDURAS VEGETAIS E DE ÓLEOS NÃO COMESTÍVEIS DE ANIMAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1051100',
    'cnae_description' => 'PREPARAÇÃO DO LEITE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1052000',
    'cnae_description' => 'FABRICAÇÃO DE LATICÍNIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1053800',
    'cnae_description' => 'FABRICAÇÃO DE SORVETES E OUTROS GELADOS COMESTÍVEIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1061901',
    'cnae_description' => 'BENEFICIAMENTO DE ARROZ',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1061902',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS DO ARROZ',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1062700',
    'cnae_description' => 'MOAGEM DE TRIGO E FABRICAÇÃO DE DERIVADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1063500',
    'cnae_description' => 'FABRICAÇÃO DE FARINHA DE MANDIOCA E DERIVADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1064300',
    'cnae_description' => 'FABRICAÇÃO DE FARINHA DE MILHO E DERIVADOS, EXCETO ÓLEOS DE MILHO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1065101',
    'cnae_description' => 'FABRICAÇÃO DE AMIDOS E FÉCULAS DE VEGETAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1065102',
    'cnae_description' => 'FABRICAÇÃO DE ÓLEO DE MILHO EM BRUTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1065103',
    'cnae_description' => 'FABRICAÇÃO DE ÓLEO DE MILHO REFINADO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1066000',
    'cnae_description' => 'FABRICAÇÃO DE ALIMENTOS PARA ANIMAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1069400',
    'cnae_description' => 'MOAGEM E FABRICAÇÃO DE PRODUTOS DE ORIGEM VEGETAL NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1071600',
    'cnae_description' => 'FABRICAÇÃO DE AÇÚCAR EM BRUTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1072401',
    'cnae_description' => 'FABRICAÇÃO DE AÇÚCAR DE CANA REFINADO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1072402',
    'cnae_description' => 'FABRICAÇÃO DE AÇÚCAR DE CEREAIS (DEXTROSE) E DE BETERRABA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1081301',
    'cnae_description' => 'BENEFICIAMENTO DE CAFÉ',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1081302',
    'cnae_description' => 'TORREFAÇÃO E MOAGEM DE CAFÉ',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1082100',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS À BASE DE CAFÉ',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1091101',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS DE PANIFICAÇÃO INDUSTRIAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1091102',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS DE PADARIA E CONFEITARIA COM PREDOMINÂNCIA  DE PRODUÇÃO PRÓPRIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1092900',
    'cnae_description' => 'FABRICAÇÃO DE BISCOITOS E BOLACHAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1093701',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS DERIVADOS DO CACAU E DE CHOCOLATES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1093702',
    'cnae_description' => 'FABRICAÇÃO DE FRUTAS CRISTALIZADAS, BALAS E SEMELHANTES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1094500',
    'cnae_description' => 'FABRICAÇÃO DE MASSAS ALIMENTÍCIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1095300',
    'cnae_description' => 'FABRICAÇÃO DE ESPECIARIAS, MOLHOS, TEMPEROS E CONDIMENTOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1096100',
    'cnae_description' => 'FABRICAÇÃO DE ALIMENTOS E PRATOS PRONTOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1099601',
    'cnae_description' => 'FABRICAÇÃO DE VINAGRES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1099602',
    'cnae_description' => 'FABRICAÇÃO DE PÓS ALIMENTÍCIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1099603',
    'cnae_description' => 'FABRICAÇÃO DE FERMENTOS E LEVEDURAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1099604',
    'cnae_description' => 'FABRICAÇÃO DE GELO COMUM',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1099605',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS PARA INFUSÃO (CHÁ, MATE, ETC.)',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1099606',
    'cnae_description' => 'FABRICAÇÃO DE ADOÇANTES NATURAIS E ARTIFICIAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1099607',
    'cnae_description' => 'FABRICAÇÃO DE ALIMENTOS DIETÉTICOS E COMPLEMENTOS ALIMENTARES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1099699',
    'cnae_description' => 'FABRICAÇÃO DE OUTROS PRODUTOS ALIMENTÍCIOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1111901',
    'cnae_description' => 'FABRICAÇÃO DE AGUARDENTE DE CANA DE AÇÚCAR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1111902',
    'cnae_description' => 'FABRICAÇÃO DE OUTRAS AGUARDENTES E BEBIDAS DESTILADAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1112700',
    'cnae_description' => 'FABRICAÇÃO DE VINHO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1113501',
    'cnae_description' => 'FABRICAÇÃO DE MALTE, INCLUSIVE MALTE UÍSQUE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1113502',
    'cnae_description' => 'FABRICAÇÃO DE CERVEJAS E CHOPES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1121600',
    'cnae_description' => 'FABRICAÇÃO DE ÁGUAS ENVASADAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1122401',
    'cnae_description' => 'FABRICAÇÃO DE REFRIGERANTES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1122402',
    'cnae_description' => 'FABRICAÇÃO DE CHÁ MATE E OUTROS CHÁS PRONTOS PARA CONSUMO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1122403',
    'cnae_description' => 'FABRICAÇÃO DE REFRESCOS, XAROPES E PÓS PARA REFRESCOS, EXCETO REFRESCOS DE FRUTAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1122404',
    'cnae_description' => 'FABRICAÇÃO DE BEBIDAS ISOTÔNICAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1122499',
    'cnae_description' => 'FABRICAÇÃO DE OUTRAS BEBIDAS NÃO ALCOÓLICAS NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1210700',
    'cnae_description' => 'PROCESSAMENTO INDUSTRIAL DO FUMO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1220401',
    'cnae_description' => 'FABRICAÇÃO DE CIGARROS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1220402',
    'cnae_description' => 'FABRICAÇÃO DE CIGARRILHAS E CHARUTOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1220403',
    'cnae_description' => 'FABRICAÇÃO DE FILTROS PARA CIGARROS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1220499',
    'cnae_description' => 'FABRICAÇÃO DE OUTROS PRODUTOS DO FUMO, EXCETO CIGARROS, CIGARRILHAS E CHARUTOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1311100',
    'cnae_description' => 'PREPARAÇÃO E FIAÇÃO DE FIBRAS DE ALGODÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1312000',
    'cnae_description' => 'PREPARAÇÃO E FIAÇÃO DE FIBRAS TÊXTEIS NATURAIS, EXCETO ALGODÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1313800',
    'cnae_description' => 'FIAÇÃO DE FIBRAS ARTIFICIAIS E SINTÉTICAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1314600',
    'cnae_description' => 'FABRICAÇÃO DE LINHAS PARA COSTURAR E BORDAR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1321900',
    'cnae_description' => 'TECELAGEM DE FIOS DE ALGODÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1322700',
    'cnae_description' => 'TECELAGEM DE FIOS DE FIBRAS TÊXTEIS NATURAIS, EXCETO ALGODÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1323500',
    'cnae_description' => 'TECELAGEM DE FIOS DE FIBRAS ARTIFICIAIS E SINTÉTICAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1330800',
    'cnae_description' => 'FABRICAÇÃO DE TECIDOS DE MALHA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1340501',
    'cnae_description' => 'ESTAMPARIA E TEXTURIZAÇÃO EM FIOS, TECIDOS, ARTEFATOS TÊXTEIS E PEÇAS DO VESTUÁRIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1340502',
    'cnae_description' => 'ALVEJAMENTO, TINGIMENTO E TORÇÃO EM FIOS, TECIDOS, ARTEFATOS TÊXTEIS E PEÇAS DO VESTUÁRIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1340599',
    'cnae_description' => 'OUTROS SERVIÇOS DE ACABAMENTO EM FIOS, TECIDOS, ARTEFATOS TÊXTEIS E PEÇAS DO VESTUÁRIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1351100',
    'cnae_description' => 'FABRICAÇÃO DE ARTEFATOS TÊXTEIS PARA USO DOMÉSTICO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1352900',
    'cnae_description' => 'FABRICAÇÃO DE ARTEFATOS DE TAPEÇARIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1353700',
    'cnae_description' => 'FABRICAÇÃO DE ARTEFATOS DE CORDOARIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1354500',
    'cnae_description' => 'FABRICAÇÃO DE TECIDOS ESPECIAIS, INCLUSIVE ARTEFATOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1359600',
    'cnae_description' => 'FABRICAÇÃO DE OUTROS PRODUTOS TÊXTEIS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1411801',
    'cnae_description' => 'CONFECÇÃO DE ROUPAS ÍNTIMAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1411802',
    'cnae_description' => 'FACÇÃO DE ROUPAS ÍNTIMAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1412601',
    'cnae_description' => 'CONFECÇÃO DE PEÇAS DE VESTUÁRIO, EXCETO ROUPAS ÍNTIMAS E AS CONFECCIONADAS SOB MEDIDA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1412602',
    'cnae_description' => 'CONFECÇÃO, SOB MEDIDA, DE PEÇAS DO VESTUÁRIO, EXCETO ROUPAS ÍNTIMAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1412603',
    'cnae_description' => 'FACÇÃO DE PEÇAS DO VESTUÁRIO, EXCETO ROUPAS ÍNTIMAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1413401',
    'cnae_description' => 'CONFECÇÃO DE ROUPAS PROFISSIONAIS, EXCETO SOB MEDIDA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1413402',
    'cnae_description' => 'CONFECÇÃO, SOB MEDIDA, DE ROUPAS PROFISSIONAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1413403',
    'cnae_description' => 'FACÇÃO DE ROUPAS PROFISSIONAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1414200',
    'cnae_description' => 'FABRICAÇÃO DE ACESSÓRIOS DO VESTUÁRIO, EXCETO PARA SEGURANÇA E PROTEÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1421500',
    'cnae_description' => 'FABRICAÇÃO DE MEIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1422300',
    'cnae_description' => 'FABRICAÇÃO DE ARTIGOS DO VESTUÁRIO, PRODUZIDOS EM MALHARIAS E TRICOTAGENS, EXCETO MEIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1510600',
    'cnae_description' => 'CURTIMENTO E OUTRAS PREPARAÇÕES DE COURO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1521100',
    'cnae_description' => 'FABRICAÇÃO DE ARTIGOS PARA VIAGEM, BOLSAS E SEMELHANTES DE QUALQUER MATERIAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1529700',
    'cnae_description' => 'FABRICAÇÃO DE ARTEFATOS DE COURO NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1531901',
    'cnae_description' => 'FABRICAÇÃO DE CALÇADOS DE COURO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1531902',
    'cnae_description' => 'ACABAMENTO DE CALÇADOS DE COURO SOB CONTRATO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1532700',
    'cnae_description' => 'FABRICAÇÃO DE TÊNIS DE QUALQUER MATERIAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1533500',
    'cnae_description' => 'FABRICAÇÃO DE CALÇADOS DE MATERIAL SINTÉTICO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1539400',
    'cnae_description' => 'FABRICAÇÃO DE CALÇADOS DE MATERIAIS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1540800',
    'cnae_description' => 'FABRICAÇÃO DE PARTES PARA CALÇADOS, DE QUALQUER MATERIAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1610203',
    'cnae_description' => 'SERRARIAS COM DESDOBRAMENTO DE MADEIRA EM BRUTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1610204',
    'cnae_description' => 'SERRARIAS SEM DESDOBRAMENTO DE MADEIRA EM BRUTO - RESSERRAGEM',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1610205',
    'cnae_description' => 'SERVIÇO DE TRATAMENTO DE MADEIRA REALIZADO SOB CONTRATO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1621800',
    'cnae_description' => 'FABRICAÇÃO DE MADEIRA LAMINADA E DE CHAPAS DE MADEIRA COMPENSADA, PRENSADA E AGLOMERADA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1622601',
    'cnae_description' => 'FABRICAÇÃO DE CASAS DE MADEIRA PRÉ FABRICADAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1622602',
    'cnae_description' => 'FABRICAÇÃO DE ESQUADRIAS DE MADEIRA E DE PEÇAS DE MADEIRA PARA INSTALAÇÕES INDUSTRIAIS E COMERCIAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1622699',
    'cnae_description' => 'FABRICAÇÃO DE OUTROS ARTIGOS DE CARPINTARIA PARA CONSTRUÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1623400',
    'cnae_description' => 'FABRICAÇÃO DE ARTEFATOS DE TANOARIA E DE EMBALAGENS DE MADEIRA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1629301',
    'cnae_description' => 'FABRICAÇÃO DE ARTEFATOS DIVERSOS DE MADEIRA, EXCETO MÓVEIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1629302',
    'cnae_description' => 'FABRICAÇÃO DE ARTEFATOS DIVERSOS DE CORTIÇA, BAMBU, PALHA, VIME E OUTROS MATERIAIS TRANÇADOS, EXCETO MÓVEIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1710900',
    'cnae_description' => 'FABRICAÇÃO DE CELULOSE E OUTRAS PASTAS PARA A FABRICAÇÃO DE PAPEL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1721400',
    'cnae_description' => 'FABRICAÇÃO DE PAPEL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1722200',
    'cnae_description' => 'FABRICAÇÃO DE CARTOLINA E PAPEL CARTÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1731100',
    'cnae_description' => 'FABRICAÇÃO DE EMBALAGENS DE PAPEL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1732000',
    'cnae_description' => 'FABRICAÇÃO DE EMBALAGENS DE CARTOLINA E PAPEL CARTÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1733800',
    'cnae_description' => 'FABRICAÇÃO DE CHAPAS E DE EMBALAGENS DE PAPELÃO ONDULADO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1741901',
    'cnae_description' => 'FABRICAÇÃO DE FORMULÁRIOS CONTÍNUOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1741902',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS DE PAPEL, CARTOLINA, PAPEL CARTÃO E PAPELÃO ONDULADO PARA USO INDUSTRIAL, COMERCIAL E DE ESCRITÓRIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1742701',
    'cnae_description' => 'FABRICAÇÃO DE FRALDAS DESCARTÁVEIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1742702',
    'cnae_description' => 'FABRICAÇÃO DE ABSORVENTES HIGIÊNICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1742799',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS DE PAPEL PARA USO DOMÉSTICO E HIGIÊNICO SANITÁRIO NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1749400',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS DE PASTAS CELULÓSICAS, PAPEL, CARTOLINA, PAPEL CARTÃO E PAPELÃO ONDULADO NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1811301',
    'cnae_description' => 'IMPRESSÃO DE JORNAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1811302',
    'cnae_description' => 'IMPRESSÃO DE LIVROS, REVISTAS E OUTRAS PUBLICAÇÕES PERIÓDICAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1812100',
    'cnae_description' => 'IMPRESSÃO DE MATERIAL DE SEGURANÇA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1813001',
    'cnae_description' => 'IMPRESSÃO DE MATERIAL PARA USO PUBLICITÁRIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1813099',
    'cnae_description' => 'IMPRESSÃO DE MATERIAL PARA OUTROS USOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1821100',
    'cnae_description' => 'SERVIÇOS DE PRÉ IMPRESSÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1822901',
    'cnae_description' => 'SERVIÇOS DE ENCADERNAÇÃO E PLASTIFICAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1822999',
    'cnae_description' => 'SERVIÇOS DE ACABAMENTOS GRÁFICOS, EXCETO ENCADERNAÇÃO E PLASTIFICAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1830001',
    'cnae_description' => 'REPRODUÇÃO DE SOM EM QUALQUER SUPORTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1830002',
    'cnae_description' => 'REPRODUÇÃO DE VÍDEO EM QUALQUER SUPORTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1830003',
    'cnae_description' => 'REPRODUÇÃO DE SOFTWARE EM QUALQUER SUPORTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1910100',
    'cnae_description' => 'COQUERIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1921700',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS DO REFINO DE PETRÓLEO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1922501',
    'cnae_description' => 'FORMULAÇÃO DE COMBUSTÍVEIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1922502',
    'cnae_description' => 'RERREFINO DE ÓLEOS LUBRIFICANTES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1922599',
    'cnae_description' => 'FABRICAÇÃO DE OUTROS PRODUTOS DERIVADOS DO PETRÓLEO, EXCETO PRODUTOS DO REFINO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1931400',
    'cnae_description' => 'FABRICAÇÃO DE ÁLCOOL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '1932200',
    'cnae_description' => 'FABRICAÇÃO DE BIOCOMBUSTÍVEIS, EXCETO ÁLCOOL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2011800',
    'cnae_description' => 'FABRICAÇÃO DE CLORO E ÁLCALIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2012600',
    'cnae_description' => 'FABRICAÇÃO DE INTERMEDIÁRIOS PARA FERTILIZANTES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2013401',
    'cnae_description' => 'FABRICAÇÃO DE ADUBOS E FERTILIZANTES ORGANOMINERAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2013402',
    'cnae_description' => 'FABRICAÇÃO DE ADUBOS E FERTILIZANTES, EXCETO ORGANOMINERAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2014200',
    'cnae_description' => 'FABRICAÇÃO DE GASES INDUSTRIAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2019301',
    'cnae_description' => 'ELABORAÇÃO DE COMBUSTÍVEIS NUCLEARES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2019399',
    'cnae_description' => 'FABRICAÇÃO DE OUTROS PRODUTOS QUÍMICOS INORGÂNICOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2021500',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS PETROQUÍMICOS BÁSICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2022300',
    'cnae_description' => 'FABRICAÇÃO DE INTERMEDIÁRIOS PARA PLASTIFICANTES, RESINAS E FIBRAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2029100',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS QUÍMICOS ORGÂNICOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2031200',
    'cnae_description' => 'FABRICAÇÃO DE RESINAS TERMOPLÁSTICAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2032100',
    'cnae_description' => 'FABRICAÇÃO DE RESINAS TERMOFIXAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2033900',
    'cnae_description' => 'FABRICAÇÃO DE ELASTÔMEROS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2040100',
    'cnae_description' => 'FABRICAÇÃO DE FIBRAS ARTIFICIAIS E SINTÉTICAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2051700',
    'cnae_description' => 'FABRICAÇÃO DE DEFENSIVOS AGRÍCOLAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2052500',
    'cnae_description' => 'FABRICAÇÃO DE DESINFESTANTES DOMISSANITÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2061400',
    'cnae_description' => 'FABRICAÇÃO DE SABÕES E DETERGENTES SINTÉTICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2062200',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS DE LIMPEZA E POLIMENTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2063100',
    'cnae_description' => 'FABRICAÇÃO DE COSMÉTICOS, PRODUTOS DE PERFUMARIA E DE HIGIENE PESSOAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2071100',
    'cnae_description' => 'FABRICAÇÃO DE TINTAS, VERNIZES, ESMALTES E LACAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2072000',
    'cnae_description' => 'FABRICAÇÃO DE TINTAS DE IMPRESSÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2073800',
    'cnae_description' => 'FABRICAÇÃO DE IMPERMEABILIZANTES, SOLVENTES E PRODUTOS AFINS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2091600',
    'cnae_description' => 'FABRICAÇÃO DE ADESIVOS E SELANTES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2092401',
    'cnae_description' => 'FABRICAÇÃO DE PÓLVORAS, EXPLOSIVOS E DETONANTES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2092402',
    'cnae_description' => 'FABRICAÇÃO DE ARTIGOS PIROTÉCNICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2092403',
    'cnae_description' => 'FABRICAÇÃO DE FÓSFOROS DE SEGURANÇA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2093200',
    'cnae_description' => 'FABRICAÇÃO DE ADITIVOS DE USO INDUSTRIAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2094100',
    'cnae_description' => 'FABRICAÇÃO DE CATALISADORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2099101',
    'cnae_description' => 'FABRICAÇÃO DE CHAPAS, FILMES, PAPÉIS E OUTROS MATERIAIS E PRODUTOS QUÍMICOS PARA FOTOGRAFIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2099199',
    'cnae_description' => 'FABRICAÇÃO DE OUTROS PRODUTOS QUÍMICOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2110600',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS FARMOQUÍMICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2121101',
    'cnae_description' => 'FABRICAÇÃO DE MEDICAMENTOS ALOPÁTICOS PARA USO HUMANO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2121102',
    'cnae_description' => 'FABRICAÇÃO DE MEDICAMENTOS HOMEOPÁTICOS PARA USO HUMANO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2121103',
    'cnae_description' => 'FABRICAÇÃO DE MEDICAMENTOS FITOTERÁPICOS PARA USO HUMANO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2122000',
    'cnae_description' => 'FABRICAÇÃO DE MEDICAMENTOS PARA USO VETERINÁRIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2123800',
    'cnae_description' => 'FABRICAÇÃO DE PREPARAÇÕES FARMACÊUTICAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2211100',
    'cnae_description' => 'FABRICAÇÃO DE PNEUMÁTICOS E DE CÂMARAS DE AR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2212900',
    'cnae_description' => 'REFORMA DE PNEUMÁTICOS USADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2219600',
    'cnae_description' => 'FABRICAÇÃO DE ARTEFATOS DE BORRACHA NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2221800',
    'cnae_description' => 'FABRICAÇÃO DE LAMINADOS PLANOS E TUBULARES DE MATERIAL PLÁSTICO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2222600',
    'cnae_description' => 'FABRICAÇÃO DE EMBALAGENS DE MATERIAL PLÁSTICO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2223400',
    'cnae_description' => 'FABRICAÇÃO DE TUBOS E ACESSÓRIOS DE MATERIAL PLÁSTICO PARA USO NA CONSTRUÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2229301',
    'cnae_description' => 'FABRICAÇÃO DE ARTEFATOS DE MATERIAL PLÁSTICO PARA USO PESSOAL E DOMÉSTICO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2229302',
    'cnae_description' => 'FABRICAÇÃO DE ARTEFATOS DE MATERIAL PLÁSTICO PARA USOS INDUSTRIAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2229303',
    'cnae_description' => 'FABRICAÇÃO DE ARTEFATOS DE MATERIAL PLÁSTICO PARA USO NA CONSTRUÇÃO, EXCETO TUBOS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2229399',
    'cnae_description' => 'FABRICAÇÃO DE ARTEFATOS DE MATERIAL PLÁSTICO PARA OUTROS USOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2311700',
    'cnae_description' => 'FABRICAÇÃO DE VIDRO PLANO E DE SEGURANÇA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2312500',
    'cnae_description' => 'FABRICAÇÃO DE EMBALAGENS DE VIDRO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2319200',
    'cnae_description' => 'FABRICAÇÃO DE ARTIGOS DE VIDRO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2320600',
    'cnae_description' => 'FABRICAÇÃO DE CIMENTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2330301',
    'cnae_description' => 'FABRICAÇÃO DE ESTRUTURAS PRÉ MOLDADAS DE CONCRETO ARMADO, EM SÉRIE E SOB ENCOMENDA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2330302',
    'cnae_description' => 'FABRICAÇÃO DE ARTEFATOS DE CIMENTO PARA USO NA CONSTRUÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2330303',
    'cnae_description' => 'FABRICAÇÃO DE ARTEFATOS DE FIBROCIMENTO PARA USO NA CONSTRUÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2330304',
    'cnae_description' => 'FABRICAÇÃO DE CASAS PRÉ MOLDADAS DE CONCRETO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2330305',
    'cnae_description' => 'PREPARAÇÃO DE MASSA DE CONCRETO E ARGAMASSA PARA CONSTRUÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2330399',
    'cnae_description' => 'FABRICAÇÃO DE OUTROS ARTEFATOS E PRODUTOS DE CONCRETO, CIMENTO, FIBROCIMENTO, GESSO E MATERIAIS SEMELHANTES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2341900',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS CERÂMICOS REFRATÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2342701',
    'cnae_description' => 'FABRICAÇÃO DE AZULEJOS E PISOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2342702',
    'cnae_description' => 'FABRICAÇÃO DE ARTEFATOS DE CERÂMICA E BARRO COZIDO PARA USO NA CONSTRUÇÃO, EXCETO AZULEJOS E PISOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2349401',
    'cnae_description' => 'FABRICAÇÃO DE MATERIAL SANITÁRIO DE CERÂMICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2349499',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS CERÂMICOS NÃO REFRATÁRIOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2391501',
    'cnae_description' => 'BRITAMENTO DE PEDRAS, EXCETO ASSOCIADO À EXTRAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2391502',
    'cnae_description' => 'APARELHAMENTO DE PEDRAS PARA CONSTRUÇÃO, EXCETO ASSOCIADO À EXTRAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2391503',
    'cnae_description' => 'APARELHAMENTO DE PLACAS E EXECUÇÃO DE TRABALHOS EM MÁRMORE, GRANITO, ARDÓSIA E OUTRAS PEDRAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2392300',
    'cnae_description' => 'FABRICAÇÃO DE CAL E GESSO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2399101',
    'cnae_description' => 'DECORAÇÃO, LAPIDAÇÃO, GRAVAÇÃO, VITRIFICAÇÃO E OUTROS TRABALHOS EM CERÂMICA, LOUÇA, VIDRO E CRISTAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2399102',
    'cnae_description' => 'FABRICAÇÃO DE ABRASIVOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2399199',
    'cnae_description' => 'FABRICAÇÃO DE OUTROS PRODUTOS DE MINERAIS NÃO METÁLICOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2411300',
    'cnae_description' => 'PRODUÇÃO DE FERRO GUSA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2412100',
    'cnae_description' => 'PRODUÇÃO DE FERROLIGAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2421100',
    'cnae_description' => 'PRODUÇÃO DE SEMI ACABADOS DE AÇO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2422901',
    'cnae_description' => 'PRODUÇÃO DE LAMINADOS PLANOS DE AÇO AO CARBONO, REVESTIDOS OU NÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2422902',
    'cnae_description' => 'PRODUÇÃO DE LAMINADOS PLANOS DE AÇOS ESPECIAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2423701',
    'cnae_description' => 'PRODUÇÃO DE TUBOS DE AÇO SEM COSTURA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2423702',
    'cnae_description' => 'PRODUÇÃO DE LAMINADOS LONGOS DE AÇO, EXCETO TUBOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2424501',
    'cnae_description' => 'PRODUÇÃO DE ARAMES DE AÇO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2424502',
    'cnae_description' => 'PRODUÇÃO DE RELAMINADOS, TREFILADOS E PERFILADOS DE AÇO, EXCETO ARAMES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2431800',
    'cnae_description' => 'PRODUÇÃO DE TUBOS DE AÇO COM COSTURA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2439300',
    'cnae_description' => 'PRODUÇÃO DE OUTROS TUBOS DE FERRO E AÇO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2441501',
    'cnae_description' => 'PRODUÇÃO DE ALUMÍNIO E SUAS LIGAS EM FORMAS PRIMÁRIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2441502',
    'cnae_description' => 'PRODUÇÃO DE LAMINADOS DE ALUMÍNIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2442300',
    'cnae_description' => 'METALURGIA DOS METAIS PRECIOSOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2443100',
    'cnae_description' => 'METALURGIA DO COBRE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2449101',
    'cnae_description' => 'PRODUÇÃO DE ZINCO EM FORMAS PRIMÁRIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2449102',
    'cnae_description' => 'PRODUÇÃO DE LAMINADOS DE ZINCO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2449103',
    'cnae_description' => 'FABRICAÇÃO DE ÂNODOS PARA GALVANOPLASTIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2449199',
    'cnae_description' => 'METALURGIA DE OUTROS METAIS NÃO FERROSOS E SUAS LIGAS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2451200',
    'cnae_description' => 'FUNDIÇÃO DE FERRO E AÇO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2452100',
    'cnae_description' => 'FUNDIÇÃO DE METAIS NÃO FERROSOS E SUAS LIGAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2511000',
    'cnae_description' => 'FABRICAÇÃO DE ESTRUTURAS METÁLICAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2512800',
    'cnae_description' => 'FABRICAÇÃO DE ESQUADRIAS DE METAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2513600',
    'cnae_description' => 'FABRICAÇÃO DE OBRAS DE CALDEIRARIA PESADA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2521700',
    'cnae_description' => 'FABRICAÇÃO DE TANQUES, RESERVATÓRIOS METÁLICOS E CALDEIRAS PARA AQUECIMENTO CENTRAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2522500',
    'cnae_description' => 'FABRICAÇÃO DE CALDEIRAS GERADORAS DE VAPOR, EXCETO PARA AQUECIMENTO CENTRAL E PARA VEÍCULOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2531401',
    'cnae_description' => 'PRODUÇÃO DE FORJADOS DE AÇO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2531402',
    'cnae_description' => 'PRODUÇÃO DE FORJADOS DE METAIS NÃO FERROSOS E SUAS LIGAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2532201',
    'cnae_description' => 'PRODUÇÃO DE ARTEFATOS ESTAMPADOS DE METAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2532202',
    'cnae_description' => 'METALURGIA DO PÓ',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2539001',
    'cnae_description' => 'SERVIÇOS DE USINAGEM, TORNEARIA E SOLDA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2539002',
    'cnae_description' => 'SERVIÇOS DE TRATAMENTO E REVESTIMENTO EM METAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2541100',
    'cnae_description' => 'FABRICAÇÃO DE ARTIGOS DE CUTELARIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2542000',
    'cnae_description' => 'FABRICAÇÃO DE ARTIGOS DE SERRALHERIA, EXCETO ESQUADRIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2543800',
    'cnae_description' => 'FABRICAÇÃO DE FERRAMENTAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2550101',
    'cnae_description' => 'FABRICAÇÃO DE EQUIPAMENTO BÉLICO PESADO, EXCETO VEÍCULOS MILITARES DE COMBATE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2550102',
    'cnae_description' => 'FABRICAÇÃO DE ARMAS DE FOGO, OUTRAS ARMAS  E MUNIÇÕES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2591800',
    'cnae_description' => 'FABRICAÇÃO DE EMBALAGENS METÁLICAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2592601',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS DE TREFILADOS DE METAL PADRONIZADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2592602',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS DE TREFILADOS DE METAL, EXCETO PADRONIZADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2593400',
    'cnae_description' => 'FABRICAÇÃO DE ARTIGOS DE METAL PARA USO DOMÉSTICO E PESSOAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2599301',
    'cnae_description' => 'SERVIÇOS DE CONFECÇÃO DE ARMAÇÕES METÁLICAS PARA A CONSTRUÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2599302',
    'cnae_description' => 'SERVIÇO DE CORTE E DOBRA DE METAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2599399',
    'cnae_description' => 'FABRICAÇÃO DE OUTROS PRODUTOS DE METAL NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2610800',
    'cnae_description' => 'FABRICAÇÃO DE COMPONENTES ELETRÔNICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2621300',
    'cnae_description' => 'FABRICAÇÃO DE EQUIPAMENTOS DE INFORMÁTICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2622100',
    'cnae_description' => 'FABRICAÇÃO DE PERIFÉRICOS PARA EQUIPAMENTOS DE INFORMÁTICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2631100',
    'cnae_description' => 'FABRICAÇÃO DE EQUIPAMENTOS TRANSMISSORES DE COMUNICAÇÃO, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2632900',
    'cnae_description' => 'FABRICAÇÃO DE APARELHOS TELEFÔNICOS E DE OUTROS EQUIPAMENTOS DE COMUNICAÇÃO, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2640000',
    'cnae_description' => 'FABRICAÇÃO DE APARELHOS DE RECEPÇÃO, REPRODUÇÃO, GRAVAÇÃO E AMPLIFICAÇÃO DE ÁUDIO E VÍDEO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2651500',
    'cnae_description' => 'FABRICAÇÃO DE APARELHOS E EQUIPAMENTOS DE MEDIDA, TESTE E CONTROLE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2652300',
    'cnae_description' => 'FABRICAÇÃO DE CRONÔMETROS E RELÓGIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2660400',
    'cnae_description' => 'FABRICAÇÃO DE APARELHOS ELETROMÉDICOS E ELETROTERAPÊUTICOS E EQUIPAMENTOS DE IRRADIAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2670101',
    'cnae_description' => 'FABRICAÇÃO DE EQUIPAMENTOS E INSTRUMENTOS ÓPTICOS, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2670102',
    'cnae_description' => 'FABRICAÇÃO DE APARELHOS FOTOGRÁFICOS E CINEMATOGRÁFICOS, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2680900',
    'cnae_description' => 'FABRICAÇÃO DE MÍDIAS VIRGENS, MAGNÉTICAS E ÓPTICAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2710401',
    'cnae_description' => 'FABRICAÇÃO DE GERADORES DE CORRENTE CONTÍNUA E ALTERNADA, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2710402',
    'cnae_description' => 'FABRICAÇÃO DE TRANSFORMADORES, INDUTORES, CONVERSORES, SINCRONIZADORES E SEMELHANTES, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2710403',
    'cnae_description' => 'FABRICAÇÃO DE MOTORES ELÉTRICOS, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2721000',
    'cnae_description' => 'FABRICAÇÃO DE PILHAS, BATERIAS E ACUMULADORES ELÉTRICOS, EXCETO PARA VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2722801',
    'cnae_description' => 'FABRICAÇÃO DE BATERIAS E ACUMULADORES PARA VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2722802',
    'cnae_description' => 'RECONDICIONAMENTO DE BATERIAS E ACUMULADORES PARA VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2731700',
    'cnae_description' => 'FABRICAÇÃO DE APARELHOS E EQUIPAMENTOS PARA DISTRIBUIÇÃO E CONTROLE DE ENERGIA ELÉTRICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2732500',
    'cnae_description' => 'FABRICAÇÃO DE MATERIAL ELÉTRICO PARA INSTALAÇÕES EM CIRCUITO DE CONSUMO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2733300',
    'cnae_description' => 'FABRICAÇÃO DE FIOS, CABOS E CONDUTORES ELÉTRICOS ISOLADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2740601',
    'cnae_description' => 'FABRICAÇÃO DE LÂMPADAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2740602',
    'cnae_description' => 'FABRICAÇÃO DE LUMINÁRIAS E OUTROS EQUIPAMENTOS DE ILUMINAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2751100',
    'cnae_description' => 'FABRICAÇÃO DE FOGÕES, REFRIGERADORES E MÁQUINAS DE LAVAR E SECAR PARA USO DOMÉSTICO, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2759701',
    'cnae_description' => 'FABRICAÇÃO DE APARELHOS ELÉTRICOS DE USO PESSOAL, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2759799',
    'cnae_description' => 'FABRICAÇÃO DE OUTROS APARELHOS ELETRODOMÉSTICOS NÃO ESPECIFICADOS ANTERIORMENTE, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2790201',
    'cnae_description' => 'FABRICAÇÃO DE ELETRODOS, CONTATOS E OUTROS ARTIGOS DE CARVÃO E GRAFITA PARA USO ELÉTRICO, ELETROÍMÃS E ISOLADORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2790202',
    'cnae_description' => 'FABRICAÇÃO DE EQUIPAMENTOS PARA SINALIZAÇÃO E ALARME',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2790299',
    'cnae_description' => 'FABRICAÇÃO DE OUTROS EQUIPAMENTOS E APARELHOS ELÉTRICOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2811900',
    'cnae_description' => 'FABRICAÇÃO DE MOTORES E TURBINAS, PEÇAS E ACESSÓRIOS, EXCETO PARA AVIÕES E VEÍCULOS RODOVIÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2812700',
    'cnae_description' => 'FABRICAÇÃO DE EQUIPAMENTOS HIDRÁULICOS E PNEUMÁTICOS, PEÇAS E ACESSÓRIOS, EXCETO VÁLVULAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2813500',
    'cnae_description' => 'FABRICAÇÃO DE VÁLVULAS, REGISTROS E DISPOSITIVOS SEMELHANTES, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2814301',
    'cnae_description' => 'FABRICAÇÃO DE COMPRESSORES PARA USO INDUSTRIAL, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2814302',
    'cnae_description' => 'FABRICAÇÃO DE COMPRESSORES PARA USO NÃO INDUSTRIAL, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2815101',
    'cnae_description' => 'FABRICAÇÃO DE ROLAMENTOS PARA FINS INDUSTRIAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2815102',
    'cnae_description' => 'FABRICAÇÃO DE EQUIPAMENTOS DE TRANSMISSÃO PARA FINS INDUSTRIAIS, EXCETO ROLAMENTOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2821601',
    'cnae_description' => 'FABRICAÇÃO DE FORNOS INDUSTRIAIS, APARELHOS E EQUIPAMENTOS NÃO ELÉTRICOS PARA INSTALAÇÕES TÉRMICAS, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2821602',
    'cnae_description' => 'FABRICAÇÃO DE ESTUFAS E FORNOS ELÉTRICOS PARA FINS INDUSTRIAIS, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2822401',
    'cnae_description' => 'FABRICAÇÃO DE MÁQUINAS, EQUIPAMENTOS E APARELHOS PARA TRANSPORTE E ELEVAÇÃO DE PESSOAS, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2822402',
    'cnae_description' => 'FABRICAÇÃO DE MÁQUINAS, EQUIPAMENTOS E APARELHOS PARA TRANSPORTE E ELEVAÇÃO DE CARGAS, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2823200',
    'cnae_description' => 'FABRICAÇÃO DE MÁQUINAS E APARELHOS DE REFRIGERAÇÃO E VENTILAÇÃO PARA USO INDUSTRIAL E COMERCIAL, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2824101',
    'cnae_description' => 'FABRICAÇÃO DE APARELHOS E EQUIPAMENTOS DE AR CONDICIONADO PARA USO INDUSTRIAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2824102',
    'cnae_description' => 'FABRICAÇÃO DE APARELHOS E EQUIPAMENTOS DE AR CONDICIONADO PARA USO NÃO INDUSTRIAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2825900',
    'cnae_description' => 'FABRICAÇÃO DE MÁQUINAS E EQUIPAMENTOS PARA SANEAMENTO BÁSICO E AMBIENTAL, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2829101',
    'cnae_description' => 'FABRICAÇÃO DE MÁQUINAS DE ESCREVER, CALCULAR E OUTROS EQUIPAMENTOS NÃO ELETRÔNICOS PARA ESCRITÓRIO, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2829199',
    'cnae_description' => 'FABRICAÇÃO DE OUTRAS MÁQUINAS E EQUIPAMENTOS DE USO GERAL NÃO ESPECIFICADOS ANTERIORMENTE, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2831300',
    'cnae_description' => 'FABRICAÇÃO DE TRATORES AGRÍCOLAS, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2832100',
    'cnae_description' => 'FABRICAÇÃO DE EQUIPAMENTOS PARA IRRIGAÇÃO AGRÍCOLA, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2833000',
    'cnae_description' => 'FABRICAÇÃO DE MÁQUINAS E EQUIPAMENTOS PARA A AGRICULTURA E PECUÁRIA, PEÇAS E ACESSÓRIOS, EXCETO PARA IRRIGAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2840200',
    'cnae_description' => 'FABRICAÇÃO DE MÁQUINAS FERRAMENTA, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2851800',
    'cnae_description' => 'FABRICAÇÃO DE MÁQUINAS E EQUIPAMENTOS PARA A PROSPECÇÃO E EXTRAÇÃO DE PETRÓLEO, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2852600',
    'cnae_description' => 'FABRICAÇÃO DE OUTRAS MÁQUINAS E EQUIPAMENTOS PARA USO NA EXTRAÇÃO MINERAL, PEÇAS E ACESSÓRIOS, EXCETO NA EXTRAÇÃO DE PETRÓLEO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2853400',
    'cnae_description' => 'FABRICAÇÃO DE TRATORES, PEÇAS E ACESSÓRIOS, EXCETO AGRÍCOLAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2854200',
    'cnae_description' => 'FABRICAÇÃO DE MÁQUINAS E EQUIPAMENTOS PARA TERRAPLENAGEM, PAVIMENTAÇÃO E CONSTRUÇÃO, PEÇAS E ACESSÓRIOS, EXCETO TRATORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2861500',
    'cnae_description' => 'FABRICAÇÃO DE MÁQUINAS PARA A INDÚSTRIA METALÚRGICA, PEÇAS E ACESSÓRIOS, EXCETO MÁQUINAS FERRAMENTA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2862300',
    'cnae_description' => 'FABRICAÇÃO DE MÁQUINAS E EQUIPAMENTOS PARA AS INDÚSTRIAS DE ALIMENTOS, BEBIDAS E FUMO, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2863100',
    'cnae_description' => 'FABRICAÇÃO DE MÁQUINAS E EQUIPAMENTOS PARA A INDÚSTRIA TÊXTIL, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2864000',
    'cnae_description' => 'FABRICAÇÃO DE MÁQUINAS E EQUIPAMENTOS PARA AS INDÚSTRIAS DO VESTUÁRIO, DO COURO E DE CALÇADOS, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2865800',
    'cnae_description' => 'FABRICAÇÃO DE MÁQUINAS E EQUIPAMENTOS PARA AS INDÚSTRIAS DE CELULOSE, PAPEL E PAPELÃO E ARTEFATOS, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2866600',
    'cnae_description' => 'FABRICAÇÃO DE MÁQUINAS E EQUIPAMENTOS PARA A INDÚSTRIA DO PLÁSTICO, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2869100',
    'cnae_description' => 'FABRICAÇÃO DE MÁQUINAS E EQUIPAMENTOS PARA USO INDUSTRIAL ESPECÍFICO NÃO ESPECIFICADOS ANTERIORMENTE, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2910701',
    'cnae_description' => 'FABRICAÇÃO DE AUTOMÓVEIS, CAMIONETAS E UTILITÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2910702',
    'cnae_description' => 'FABRICAÇÃO DE CHASSIS COM MOTOR PARA AUTOMÓVEIS, CAMIONETAS E UTILITÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2910703',
    'cnae_description' => 'FABRICAÇÃO DE MOTORES PARA AUTOMÓVEIS, CAMIONETAS E UTILITÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2920401',
    'cnae_description' => 'FABRICAÇÃO DE CAMINHÕES E ÔNIBUS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2920402',
    'cnae_description' => 'FABRICAÇÃO DE MOTORES PARA CAMINHÕES E ÔNIBUS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2930101',
    'cnae_description' => 'FABRICAÇÃO DE CABINES, CARROCERIAS E REBOQUES PARA CAMINHÕES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2930102',
    'cnae_description' => 'FABRICAÇÃO DE CARROCERIAS PARA ÔNIBUS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2930103',
    'cnae_description' => 'FABRICAÇÃO DE CABINES, CARROCERIAS E REBOQUES PARA OUTROS VEÍCULOS AUTOMOTORES, EXCETO CAMINHÕES E ÔNIBUS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2941700',
    'cnae_description' => 'FABRICAÇÃO DE PEÇAS E ACESSÓRIOS PARA O SISTEMA MOTOR DE VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2942500',
    'cnae_description' => 'FABRICAÇÃO DE PEÇAS E ACESSÓRIOS PARA OS SISTEMAS DE MARCHA E TRANSMISSÃO DE VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2943300',
    'cnae_description' => 'FABRICAÇÃO DE PEÇAS E ACESSÓRIOS PARA O SISTEMA DE FREIOS DE VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2944100',
    'cnae_description' => 'FABRICAÇÃO DE PEÇAS E ACESSÓRIOS PARA O SISTEMA DE DIREÇÃO E SUSPENSÃO DE VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2945000',
    'cnae_description' => 'FABRICAÇÃO DE MATERIAL ELÉTRICO E ELETRÔNICO PARA VEÍCULOS AUTOMOTORES, EXCETO BATERIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2949201',
    'cnae_description' => 'FABRICAÇÃO DE BANCOS E ESTOFADOS PARA VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2949299',
    'cnae_description' => 'FABRICAÇÃO DE OUTRAS PEÇAS E ACESSÓRIOS PARA VEÍCULOS AUTOMOTORES NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '2950600',
    'cnae_description' => 'RECONDICIONAMENTO E RECUPERAÇÃO DE MOTORES PARA VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3011301',
    'cnae_description' => 'CONSTRUÇÃO DE EMBARCAÇÕES DE GRANDE PORTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3011302',
    'cnae_description' => 'CONSTRUÇÃO DE EMBARCAÇÕES PARA USO COMERCIAL E PARA USOS ESPECIAIS, EXCETO DE GRANDE PORTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3012100',
    'cnae_description' => 'CONSTRUÇÃO DE EMBARCAÇÕES PARA ESPORTE E LAZER',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3031800',
    'cnae_description' => 'FABRICAÇÃO DE LOCOMOTIVAS, VAGÕES E OUTROS MATERIAIS RODANTES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3032600',
    'cnae_description' => 'FABRICAÇÃO DE PEÇAS E ACESSÓRIOS PARA VEÍCULOS FERROVIÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3041500',
    'cnae_description' => 'FABRICAÇÃO DE AERONAVES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3042300',
    'cnae_description' => 'FABRICAÇÃO DE TURBINAS, MOTORES E OUTROS COMPONENTES E PEÇAS PARA AERONAVES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3050400',
    'cnae_description' => 'FABRICAÇÃO DE VEÍCULOS MILITARES DE COMBATE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3091101',
    'cnae_description' => 'FABRICAÇÃO DE MOTOCICLETAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3091102',
    'cnae_description' => 'FABRICAÇÃO DE PEÇAS E ACESSÓRIOS PARA MOTOCICLETAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3092000',
    'cnae_description' => 'FABRICAÇÃO DE BICICLETAS E TRICICLOS NÃO MOTORIZADOS, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3099700',
    'cnae_description' => 'FABRICAÇÃO DE EQUIPAMENTOS DE TRANSPORTE NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3101200',
    'cnae_description' => 'FABRICAÇÃO DE MÓVEIS COM PREDOMINÂNCIA DE MADEIRA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3102100',
    'cnae_description' => 'FABRICAÇÃO DE MÓVEIS COM PREDOMINÂNCIA DE METAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3103900',
    'cnae_description' => 'FABRICAÇÃO DE MÓVEIS DE OUTROS MATERIAIS, EXCETO MADEIRA E METAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3104700',
    'cnae_description' => 'FABRICAÇÃO DE COLCHÕES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3211601',
    'cnae_description' => 'LAPIDAÇÃO DE GEMAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3211602',
    'cnae_description' => 'FABRICAÇÃO DE ARTEFATOS DE JOALHERIA E OURIVESARIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3211603',
    'cnae_description' => 'CUNHAGEM DE MOEDAS E MEDALHAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3212400',
    'cnae_description' => 'FABRICAÇÃO DE BIJUTERIAS E ARTEFATOS SEMELHANTES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3220500',
    'cnae_description' => 'FABRICAÇÃO DE INSTRUMENTOS MUSICAIS, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3230200',
    'cnae_description' => 'FABRICAÇÃO DE ARTEFATOS PARA PESCA E ESPORTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3240001',
    'cnae_description' => 'FABRICAÇÃO DE JOGOS ELETRÔNICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3240002',
    'cnae_description' => 'FABRICAÇÃO DE MESAS DE BILHAR, DE SINUCA E ACESSÓRIOS NÃO ASSOCIADA À LOCAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3240003',
    'cnae_description' => 'FABRICAÇÃO DE MESAS DE BILHAR, DE SINUCA E ACESSÓRIOS ASSOCIADA À LOCAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3240099',
    'cnae_description' => 'FABRICAÇÃO DE OUTROS BRINQUEDOS E JOGOS RECREATIVOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3250701',
    'cnae_description' => 'FABRICAÇÃO DE INSTRUMENTOS NÃO ELETRÔNICOS E UTENSÍLIOS PARA USO MÉDICO, CIRÚRGICO, ODONTOLÓGICO E DE LABORATÓRIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3250702',
    'cnae_description' => 'FABRICAÇÃO DE MOBILIÁRIO PARA USO MÉDICO, CIRÚRGICO, ODONTOLÓGICO E DE LABORATÓRIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3250703',
    'cnae_description' => 'FABRICAÇÃO DE APARELHOS E UTENSÍLIOS PARA CORREÇÃO DE DEFEITOS FÍSICOS E APARELHOS ORTOPÉDICOS EM GERAL SOB ENCOMENDA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3250704',
    'cnae_description' => 'FABRICAÇÃO DE APARELHOS E UTENSÍLIOS PARA CORREÇÃO DE DEFEITOS FÍSICOS E APARELHOS ORTOPÉDICOS EM GERAL, EXCETO SOB ENCOMENDA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3250705',
    'cnae_description' => 'FABRICAÇÃO DE MATERIAIS PARA MEDICINA E ODONTOLOGIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3250706',
    'cnae_description' => 'SERVIÇOS DE PRÓTESE DENTÁRIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3250707',
    'cnae_description' => 'FABRICAÇÃO DE ARTIGOS ÓPTICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3250709',
    'cnae_description' => 'SERVIÇO DE LABORATÓRIO ÓPTICO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3291400',
    'cnae_description' => 'FABRICAÇÃO DE ESCOVAS, PINCÉIS E VASSOURAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3292201',
    'cnae_description' => 'FABRICAÇÃO DE ROUPAS DE PROTEÇÃO E SEGURANÇA E RESISTENTES A FOGO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3292202',
    'cnae_description' => 'FABRICAÇÃO DE EQUIPAMENTOS E ACESSÓRIOS PARA SEGURANÇA PESSOAL E PROFISSIONAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3299001',
    'cnae_description' => 'FABRICAÇÃO DE GUARDA CHUVAS E SIMILARES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3299002',
    'cnae_description' => 'FABRICAÇÃO DE CANETAS, LÁPIS E OUTROS ARTIGOS PARA ESCRITÓRIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3299003',
    'cnae_description' => 'FABRICAÇÃO DE LETRAS, LETREIROS E PLACAS DE QUALQUER MATERIAL, EXCETO LUMINOSOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3299004',
    'cnae_description' => 'FABRICAÇÃO DE PAINÉIS E LETREIROS LUMINOSOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3299005',
    'cnae_description' => 'FABRICAÇÃO DE AVIAMENTOS PARA COSTURA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3299006',
    'cnae_description' => 'FABRICAÇÃO DE VELAS, INCLUSIVE DECORATIVAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3299099',
    'cnae_description' => 'FABRICAÇÃO DE PRODUTOS DIVERSOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3311200',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE TANQUES, RESERVATÓRIOS METÁLICOS E CALDEIRAS, EXCETO PARA VEÍCULOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3312102',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE APARELHOS E INSTRUMENTOS DE MEDIDA, TESTE E CONTROLE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3312103',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE APARELHOS ELETROMÉDICOS E ELETROTERAPÊUTICOS E EQUIPAMENTOS DE IRRADIAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3312104',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE EQUIPAMENTOS E INSTRUMENTOS ÓPTICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3313901',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE GERADORES, TRANSFORMADORES E MOTORES ELÉTRICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3313902',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE BATERIAS E ACUMULADORES ELÉTRICOS, EXCETO PARA VEÍCULOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3313999',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE MÁQUINAS, APARELHOS E MATERIAIS ELÉTRICOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314701',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE MÁQUINAS MOTRIZES NÃO ELÉTRICAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314702',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE EQUIPAMENTOS HIDRÁULICOS E PNEUMÁTICOS, EXCETO VÁLVULAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314703',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE VÁLVULAS INDUSTRIAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314704',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE COMPRESSORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314705',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE EQUIPAMENTOS DE TRANSMISSÃO PARA FINS INDUSTRIAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314706',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE MÁQUINAS, APARELHOS E EQUIPAMENTOS PARA INSTALAÇÕES TÉRMICAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314707',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE MÁQUINAS E APARELHOS DE REFRIGERAÇÃO E VENTILAÇÃO PARA USO INDUSTRIAL E COMERCIAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314708',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE MÁQUINAS, EQUIPAMENTOS E APARELHOS PARA TRANSPORTE E ELEVAÇÃO DE CARGAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314709',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE MÁQUINAS DE ESCREVER, CALCULAR E DE OUTROS EQUIPAMENTOS NÃO ELETRÔNICOS PARA ESCRITÓRIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314710',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE MÁQUINAS E EQUIPAMENTOS PARA USO GERAL NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314711',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE MÁQUINAS E EQUIPAMENTOS PARA AGRICULTURA E PECUÁRIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314712',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE TRATORES AGRÍCOLAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314713',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE MÁQUINAS FERRAMENTA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314714',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE MÁQUINAS E EQUIPAMENTOS PARA A PROSPECÇÃO E EXTRAÇÃO DE PETRÓLEO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314715',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE MÁQUINAS E EQUIPAMENTOS PARA USO NA EXTRAÇÃO MINERAL, EXCETO NA EXTRAÇÃO DE PETRÓLEO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314716',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE TRATORES, EXCETO AGRÍCOLAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314717',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE MÁQUINAS E EQUIPAMENTOS DE TERRAPLENAGEM, PAVIMENTAÇÃO E CONSTRUÇÃO, EXCETO TRATORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314718',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE MÁQUINAS PARA A INDÚSTRIA METALÚRGICA, EXCETO MÁQUINAS FERRAMENTA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314719',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE MÁQUINAS E EQUIPAMENTOS PARA AS INDÚSTRIAS DE ALIMENTOS, BEBIDAS E FUMO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314720',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE MÁQUINAS E EQUIPAMENTOS PARA A INDÚSTRIA TÊXTIL, DO VESTUÁRIO, DO COURO E CALÇADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314721',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE MÁQUINAS E APARELHOS PARA A INDÚSTRIA DE CELULOSE, PAPEL E PAPELÃO E ARTEFATOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314722',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE MÁQUINAS E APARELHOS PARA A INDÚSTRIA DO PLÁSTICO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3314799',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE OUTRAS MÁQUINAS E EQUIPAMENTOS PARA USOS INDUSTRIAIS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3315500',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE VEÍCULOS FERROVIÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3316301',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE AERONAVES, EXCETO A MANUTENÇÃO NA PISTA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3316302',
    'cnae_description' => 'MANUTENÇÃO DE AERONAVES NA PISTA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3317101',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE EMBARCAÇÕES E ESTRUTURAS FLUTUANTES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3317102',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE EMBARCAÇÕES PARA ESPORTE E LAZER',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3319800',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE EQUIPAMENTOS E PRODUTOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3321000',
    'cnae_description' => 'INSTALAÇÃO DE MÁQUINAS E EQUIPAMENTOS INDUSTRIAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3329501',
    'cnae_description' => 'SERVIÇOS DE MONTAGEM DE MÓVEIS DE QUALQUER MATERIAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3329599',
    'cnae_description' => 'INSTALAÇÃO DE OUTROS EQUIPAMENTOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3511501',
    'cnae_description' => 'GERAÇÃO DE ENERGIA ELÉTRICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3511502',
    'cnae_description' => 'ATIVIDADES DE COORDENAÇÃO E CONTROLE DA OPERAÇÃO DA GERAÇÃO E TRANSMISSÃO DE ENERGIA ELÉTRICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3512300',
    'cnae_description' => 'TRANSMISSÃO DE ENERGIA ELÉTRICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3513100',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE ENERGIA ELÉTRICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3514000',
    'cnae_description' => 'DISTRIBUIÇÃO DE ENERGIA ELÉTRICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3520401',
    'cnae_description' => 'PRODUÇÃO DE GÁS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3520402',
    'cnae_description' => 'DISTRIBUIÇÃO DE COMBUSTÍVEIS GASOSOS POR REDES URBANAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3530100',
    'cnae_description' => 'PRODUÇÃO E DISTRIBUIÇÃO DE VAPOR, ÁGUA QUENTE E AR CONDICIONADO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3600601',
    'cnae_description' => 'CAPTAÇÃO, TRATAMENTO E DISTRIBUIÇÃO DE ÁGUA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3600602',
    'cnae_description' => 'DISTRIBUIÇÃO DE ÁGUA POR CAMINHÕES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3701100',
    'cnae_description' => 'GESTÃO DE REDES DE ESGOTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3702900',
    'cnae_description' => 'ATIVIDADES RELACIONADAS A ESGOTO, EXCETO A GESTÃO DE REDES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3811400',
    'cnae_description' => 'COLETA DE RESÍDUOS NÃO PERIGOSOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3812200',
    'cnae_description' => 'COLETA DE RESÍDUOS PERIGOSOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3821100',
    'cnae_description' => 'TRATAMENTO E DISPOSIÇÃO DE RESÍDUOS NÃO PERIGOSOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3822000',
    'cnae_description' => 'TRATAMENTO E DISPOSIÇÃO DE RESÍDUOS PERIGOSOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3831901',
    'cnae_description' => 'RECUPERAÇÃO DE SUCATAS DE ALUMÍNIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3831999',
    'cnae_description' => 'RECUPERAÇÃO DE MATERIAIS METÁLICOS, EXCETO ALUMÍNIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3832700',
    'cnae_description' => 'RECUPERAÇÃO DE MATERIAIS PLÁSTICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3839401',
    'cnae_description' => 'USINAS DE COMPOSTAGEM',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3839499',
    'cnae_description' => 'RECUPERAÇÃO DE MATERIAIS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '3900500',
    'cnae_description' => 'DESCONTAMINAÇÃO E OUTROS SERVIÇOS DE GESTÃO DE RESÍDUOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4110700',
    'cnae_description' => 'INCORPORAÇÃO DE EMPREENDIMENTOS IMOBILIÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4120400',
    'cnae_description' => 'CONSTRUÇÃO DE EDIFÍCIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4211101',
    'cnae_description' => 'CONSTRUÇÃO DE RODOVIAS E FERROVIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4211102',
    'cnae_description' => 'PINTURA PARA SINALIZAÇÃO EM PISTAS RODOVIÁRIAS E AEROPORTOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4212000',
    'cnae_description' => 'CONSTRUÇÃO DE OBRAS DE ARTE ESPECIAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4213800',
    'cnae_description' => 'OBRAS DE URBANIZAÇÃO - RUAS, PRAÇAS E CALÇADAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4221901',
    'cnae_description' => 'CONSTRUÇÃO DE BARRAGENS E REPRESAS PARA GERAÇÃO DE ENERGIA ELÉTRICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4221902',
    'cnae_description' => 'CONSTRUÇÃO DE ESTAÇÕES E REDES DE DISTRIBUIÇÃO DE ENERGIA ELÉTRICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4221903',
    'cnae_description' => 'MANUTENÇÃO DE REDES DE DISTRIBUIÇÃO DE ENERGIA ELÉTRICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4221904',
    'cnae_description' => 'CONSTRUÇÃO DE ESTAÇÕES E REDES DE TELECOMUNICAÇÕES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4221905',
    'cnae_description' => 'MANUTENÇÃO DE ESTAÇÕES E REDES DE TELECOMUNICAÇÕES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4222701',
    'cnae_description' => 'CONSTRUÇÃO DE REDES DE ABASTECIMENTO DE ÁGUA, COLETA DE ESGOTO E CONSTRUÇÕES CORRELATAS, EXCETO OBRAS DE IRRIGAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4222702',
    'cnae_description' => 'OBRAS DE IRRIGAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4223500',
    'cnae_description' => 'CONSTRUÇÃO DE REDES DE TRANSPORTES POR DUTOS, EXCETO PARA ÁGUA E ESGOTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4291000',
    'cnae_description' => 'OBRAS PORTUÁRIAS, MARÍTIMAS E FLUVIAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4292801',
    'cnae_description' => 'MONTAGEM DE ESTRUTURAS METÁLICAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4292802',
    'cnae_description' => 'OBRAS DE MONTAGEM INDUSTRIAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4299501',
    'cnae_description' => 'CONSTRUÇÃO DE INSTALAÇÕES ESPORTIVAS E RECREATIVAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4299599',
    'cnae_description' => 'OUTRAS OBRAS DE ENGENHARIA CIVIL NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4311801',
    'cnae_description' => 'DEMOLIÇÃO DE EDIFÍCIOS E OUTRAS ESTRUTURAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4311802',
    'cnae_description' => 'PREPARAÇÃO DE CANTEIRO E LIMPEZA DE TERRENO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4312600',
    'cnae_description' => 'PERFURAÇÕES E SONDAGENS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4313400',
    'cnae_description' => 'OBRAS DE TERRAPLENAGEM',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4319300',
    'cnae_description' => 'SERVIÇOS DE PREPARAÇÃO DO TERRENO NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4321500',
    'cnae_description' => 'INSTALAÇÃO E MANUTENÇÃO ELÉTRICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4322301',
    'cnae_description' => 'INSTALAÇÕES HIDRÁULICAS, SANITÁRIAS E DE GÁS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4322302',
    'cnae_description' => 'INSTALAÇÃO E MANUTENÇÃO DE SISTEMAS CENTRAIS DE AR CONDICIONADO, DE VENTILAÇÃO E REFRIGERAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4322303',
    'cnae_description' => 'INSTALAÇÕES DE SISTEMA DE PREVENÇÃO CONTRA INCÊNDIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4329101',
    'cnae_description' => 'INSTALAÇÃO DE PAINÉIS PUBLICITÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4329102',
    'cnae_description' => 'INSTALAÇÃO DE EQUIPAMENTOS PARA ORIENTAÇÃO À NAVEGAÇÃO MARÍTIMA FLUVIAL E LACUSTRE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4329103',
    'cnae_description' => 'INSTALAÇÃO, MANUTENÇÃO E REPARAÇÃO DE ELEVADORES, ESCADAS E ESTEIRAS ROLANTES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4329104',
    'cnae_description' => 'MONTAGEM E INSTALAÇÃO DE SISTEMAS E EQUIPAMENTOS DE ILUMINAÇÃO E SINALIZAÇÃO EM VIAS PÚBLICAS, PORTOS E AEROPORTOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4329105',
    'cnae_description' => 'TRATAMENTOS TÉRMICOS, ACÚSTICOS OU DE VIBRAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4329199',
    'cnae_description' => 'OUTRAS OBRAS DE INSTALAÇÕES EM CONSTRUÇÕES NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4330401',
    'cnae_description' => 'IMPERMEABILIZAÇÃO EM OBRAS DE ENGENHARIA CIVIL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4330402',
    'cnae_description' => 'INSTALAÇÃO DE PORTAS, JANELAS, TETOS, DIVISÓRIAS E ARMÁRIOS EMBUTIDOS DE QUALQUER MATERIAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4330403',
    'cnae_description' => 'OBRAS DE ACABAMENTO EM GESSO E ESTUQUE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4330404',
    'cnae_description' => 'SERVIÇOS DE PINTURA DE EDIFÍCIOS EM GERAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4330405',
    'cnae_description' => 'APLICAÇÃO DE REVESTIMENTOS E DE RESINAS EM INTERIORES E EXTERIORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4330499',
    'cnae_description' => 'OUTRAS OBRAS DE ACABAMENTO DA CONSTRUÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4391600',
    'cnae_description' => 'OBRAS DE FUNDAÇÕES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4399101',
    'cnae_description' => 'ADMINISTRAÇÃO DE OBRAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4399102',
    'cnae_description' => 'MONTAGEM E DESMONTAGEM DE ANDAIMES E OUTRAS ESTRUTURAS TEMPORÁRIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4399103',
    'cnae_description' => 'OBRAS DE ALVENARIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4399104',
    'cnae_description' => 'SERVIÇOS DE OPERAÇÃO E FORNECIMENTO DE EQUIPAMENTOS PARA TRANSPORTE E ELEVAÇÃO DE CARGAS E PESSOAS PARA USO EM OBRAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4399105',
    'cnae_description' => 'PERFURAÇÃO E CONSTRUÇÃO DE POÇOS DE ÁGUA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4399199',
    'cnae_description' => 'SERVIÇOS ESPECIALIZADOS PARA CONSTRUÇÃO NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4511101',
    'cnae_description' => 'COMÉRCIO A VAREJO DE AUTOMÓVEIS, CAMIONETAS E UTILITÁRIOS NOVOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4511102',
    'cnae_description' => 'COMÉRCIO A VAREJO DE AUTOMÓVEIS, CAMIONETAS E UTILITÁRIOS USADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4511103',
    'cnae_description' => 'COMÉRCIO POR ATACADO DE AUTOMÓVEIS, CAMIONETAS E UTILITÁRIOS NOVOS E USADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4511104',
    'cnae_description' => 'COMÉRCIO POR ATACADO DE CAMINHÕES NOVOS E USADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4511105',
    'cnae_description' => 'COMÉRCIO POR ATACADO DE REBOQUES E SEMI REBOQUES NOVOS E USADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4511106',
    'cnae_description' => 'COMÉRCIO POR ATACADO DE ÔNIBUS E MICROÔNIBUS NOVOS E USADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4512901',
    'cnae_description' => 'REPRESENTANTES COMERCIAIS E AGENTES DO COMÉRCIO DE VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4512902',
    'cnae_description' => 'COMÉRCIO SOB CONSIGNAÇÃO DE VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4520001',
    'cnae_description' => 'SERVIÇOS DE MANUTENÇÃO E REPARAÇÃO MECÂNICA DE VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4520002',
    'cnae_description' => 'SERVIÇOS DE LANTERNAGEM OU FUNILARIA E PINTURA DE VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4520003',
    'cnae_description' => 'SERVIÇOS DE MANUTENÇÃO E REPARAÇÃO ELÉTRICA DE VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4520004',
    'cnae_description' => 'SERVIÇOS DE ALINHAMENTO E BALANCEAMENTO DE VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4520005',
    'cnae_description' => 'SERVIÇOS DE LAVAGEM, LUBRIFICAÇÃO E POLIMENTO DE VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4520006',
    'cnae_description' => 'SERVIÇOS DE BORRACHARIA PARA VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4520007',
    'cnae_description' => 'SERVIÇOS DE INSTALAÇÃO, MANUTENÇÃO E REPARAÇÃO DE ACESSÓRIOS PARA VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4520008',
    'cnae_description' => 'SERVIÇOS DE CAPOTARIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4530701',
    'cnae_description' => 'COMÉRCIO POR ATACADO DE PEÇAS E ACESSÓRIOS NOVOS PARA VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4530702',
    'cnae_description' => 'COMÉRCIO POR ATACADO DE PNEUMÁTICOS E CÂMARAS DE AR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4530703',
    'cnae_description' => 'COMÉRCIO A VAREJO DE PEÇAS E ACESSÓRIOS NOVOS PARA VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4530704',
    'cnae_description' => 'COMÉRCIO A VAREJO DE PEÇAS E ACESSÓRIOS USADOS PARA VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4530705',
    'cnae_description' => 'COMÉRCIO A VAREJO DE PNEUMÁTICOS E CÂMARAS DE AR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4530706',
    'cnae_description' => 'REPRESENTANTES COMERCIAIS E AGENTES DO COMÉRCIO DE PEÇAS E ACESSÓRIOS NOVOS E USADOS PARA VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4541201',
    'cnae_description' => 'COMÉRCIO POR ATACADO DE MOTOCICLETAS E MOTONETAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4541202',
    'cnae_description' => 'COMÉRCIO POR ATACADO DE PEÇAS E ACESSÓRIOS PARA MOTOCICLETAS E MOTONETAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4541203',
    'cnae_description' => 'COMÉRCIO A VAREJO DE MOTOCICLETAS E MOTONETAS NOVAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4541204',
    'cnae_description' => 'COMÉRCIO A VAREJO DE MOTOCICLETAS E MOTONETAS USADAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4541206',
    'cnae_description' => 'COMÉRCIO A VAREJO DE PEÇAS E ACESSÓRIOS NOVOS PARA MOTOCICLETAS E MOTONETAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4541207',
    'cnae_description' => 'COMÉRCIO A VAREJO DE PEÇAS E ACESSÓRIOS USADOS PARA MOTOCICLETAS E MOTONETAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4542101',
    'cnae_description' => 'REPRESENTANTES COMERCIAIS E AGENTES DO COMÉRCIO DE MOTOCICLETAS E MOTONETAS, PEÇAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4542102',
    'cnae_description' => 'COMÉRCIO SOB CONSIGNAÇÃO DE MOTOCICLETAS E MOTONETAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4543900',
    'cnae_description' => 'MANUTENÇÃO E REPARAÇÃO DE MOTOCICLETAS E MOTONETAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4611700',
    'cnae_description' => 'REPRESENTANTES COMERCIAIS E AGENTES DO COMÉRCIO DE MATÉRIAS PRIMAS AGRÍCOLAS E ANIMAIS VIVOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4612500',
    'cnae_description' => 'REPRESENTANTES COMERCIAIS E AGENTES DO COMÉRCIO DE COMBUSTÍVEIS, MINERAIS, PRODUTOS SIDERÚRGICOS E QUÍMICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4613300',
    'cnae_description' => 'REPRESENTANTES COMERCIAIS E AGENTES DO COMÉRCIO DE MADEIRA, MATERIAL DE CONSTRUÇÃO E FERRAGENS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4614100',
    'cnae_description' => 'REPRESENTANTES COMERCIAIS E AGENTES DO COMÉRCIO DE MÁQUINAS, EQUIPAMENTOS, EMBARCAÇÕES E AERONAVES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4615000',
    'cnae_description' => 'REPRESENTANTES COMERCIAIS E AGENTES DO COMÉRCIO DE ELETRODOMÉSTICOS, MÓVEIS E ARTIGOS DE USO DOMÉSTICO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4616800',
    'cnae_description' => 'REPRESENTANTES COMERCIAIS E AGENTES DO COMÉRCIO DE TÊXTEIS, VESTUÁRIO, CALÇADOS E ARTIGOS DE VIAGEM',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4617600',
    'cnae_description' => 'REPRESENTANTES COMERCIAIS E AGENTES DO COMÉRCIO DE PRODUTOS ALIMENTÍCIOS, BEBIDAS E FUMO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4618401',
    'cnae_description' => 'REPRESENTANTES COMERCIAIS E AGENTES DO COMÉRCIO DE MEDICAMENTOS, COSMÉTICOS E PRODUTOS DE PERFUMARIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4618402',
    'cnae_description' => 'REPRESENTANTES COMERCIAIS E AGENTES DO COMÉRCIO DE INSTRUMENTOS E MATERIAIS ODONTO MÉDICO HOSPITALARES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4618403',
    'cnae_description' => 'REPRESENTANTES COMERCIAIS E AGENTES DO COMÉRCIO DE JORNAIS, REVISTAS E OUTRAS PUBLICAÇÕES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4618499',
    'cnae_description' => 'OUTROS REPRESENTANTES COMERCIAIS E AGENTES DO COMÉRCIO ESPECIALIZADO EM PRODUTOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4619200',
    'cnae_description' => 'REPRESENTANTES COMERCIAIS E AGENTES DO COMÉRCIO DE MERCADORIAS EM GERAL NÃO ESPECIALIZADO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4621400',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE CAFÉ EM GRÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4622200',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE SOJA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4623101',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE ANIMAIS VIVOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4623102',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE COUROS, LÃS, PELES E OUTROS SUBPRODUTOS NÃO COMESTÍVEIS DE ORIGEM ANIMAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4623103',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE ALGODÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4623104',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE FUMO EM FOLHA NÃO BENEFICIADO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4623105',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE CACAU',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4623106',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE SEMENTES, FLORES, PLANTAS E GRAMAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4623107',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE SISAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4623108',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE MATÉRIAS PRIMAS AGRÍCOLAS COM ATIVIDADE DE FRACIONAMENTO E ACONDICIONAMENTO ASSOCIADA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4623109',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE ALIMENTOS PARA ANIMAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4623199',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE MATÉRIAS PRIMAS AGRÍCOLAS NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4631100',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE LEITE E LATICÍNIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4632001',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE CEREAIS E LEGUMINOSAS BENEFICIADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4632002',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE FARINHAS, AMIDOS E FÉCULAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4632003',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE CEREAIS E LEGUMINOSAS BENEFICIADOS, FARINHAS, AMIDOS E FÉCULAS, COM ATIVIDADE DE FRACIONAMENTO E ACONDICIONAMENTO ASSOCIADA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4633801',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE FRUTAS, VERDURAS, RAÍZES, TUBÉRCULOS, HORTALIÇAS E LEGUMES FRESCOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4633802',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE AVES VIVAS E OVOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4633803',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE COELHOS E OUTROS PEQUENOS ANIMAIS VIVOS PARA ALIMENTAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4634601',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE CARNES BOVINAS E SUÍNAS E DERIVADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4634602',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE AVES ABATIDAS E DERIVADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4634603',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE PESCADOS E FRUTOS DO MAR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4634699',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE CARNES E DERIVADOS DE OUTROS ANIMAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4635401',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE ÁGUA MINERAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4635402',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE CERVEJA, CHOPE E REFRIGERANTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4635403',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE BEBIDAS COM ATIVIDADE DE FRACIONAMENTO E ACONDICIONAMENTO ASSOCIADA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4635499',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE BEBIDAS NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4636201',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE FUMO BENEFICIADO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4636202',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE CIGARROS, CIGARRILHAS E CHARUTOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4637101',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE CAFÉ TORRADO, MOÍDO E SOLÚVEL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4637102',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE AÇÚCAR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4637103',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE ÓLEOS E GORDURAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4637104',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE PÃES, BOLOS, BISCOITOS E SIMILARES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4637105',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE MASSAS ALIMENTÍCIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4637106',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE SORVETES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4637107',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE CHOCOLATES, CONFEITOS, BALAS, BOMBONS E SEMELHANTES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4637199',
    'cnae_description' => 'COMÉRCIO ATACADISTA ESPECIALIZADO EM OUTROS PRODUTOS ALIMENTÍCIOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4639701',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE PRODUTOS ALIMENTÍCIOS EM GERAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4639702',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE PRODUTOS ALIMENTÍCIOS EM GERAL, COM ATIVIDADE DE FRACIONAMENTO E ACONDICIONAMENTO ASSOCIADA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4641901',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE TECIDOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4641902',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE ARTIGOS DE CAMA, MESA E BANHO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4641903',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE ARTIGOS DE ARMARINHO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4642701',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE ARTIGOS DO VESTUÁRIO E ACESSÓRIOS, EXCETO PROFISSIONAIS E DE SEGURANÇA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4642702',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE ROUPAS E ACESSÓRIOS PARA USO PROFISSIONAL E DE SEGURANÇA DO TRABALHO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4643501',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE CALÇADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4643502',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE BOLSAS, MALAS E ARTIGOS DE VIAGEM',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4644301',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE MEDICAMENTOS E DROGAS DE USO HUMANO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4644302',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE MEDICAMENTOS E DROGAS DE USO VETERINÁRIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4645101',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE INSTRUMENTOS E MATERIAIS PARA USO MÉDICO, CIRÚRGICO, HOSPITALAR E DE LABORATÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4645102',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE PRÓTESES E ARTIGOS DE ORTOPEDIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4645103',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE PRODUTOS ODONTOLÓGICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4646001',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE COSMÉTICOS E PRODUTOS DE PERFUMARIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4646002',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE PRODUTOS DE HIGIENE PESSOAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4647801',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE ARTIGOS DE ESCRITÓRIO E DE PAPELARIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4647802',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE LIVROS, JORNAIS E OUTRAS PUBLICAÇÕES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4649401',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE EQUIPAMENTOS ELÉTRICOS DE USO PESSOAL E DOMÉSTICO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4649402',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE APARELHOS ELETRÔNICOS DE USO PESSOAL E DOMÉSTICO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4649403',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE BICICLETAS, TRICICLOS E OUTROS VEÍCULOS RECREATIVOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4649404',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE MÓVEIS E ARTIGOS DE COLCHOARIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4649405',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE ARTIGOS DE TAPEÇARIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4649406',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE LUSTRES, LUMINÁRIAS E ABAJURES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4649407',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE FILMES, CDS, DVDS, FITAS E DISCOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4649408',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE PRODUTOS DE HIGIENE, LIMPEZA E CONSERVAÇÃO DOMICILIAR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4649409',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE PRODUTOS DE HIGIENE, LIMPEZA E CONSERVAÇÃO DOMICILIAR, COM ATIVIDADE DE FRACIONAMENTO E ACONDICIONAMENTO ASSOCIADA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4649410',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE JÓIAS, RELÓGIOS E BIJUTERIAS, INCLUSIVE PEDRAS PRECIOSAS E SEMIPRECIOSAS LAPIDADAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4649499',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE OUTROS EQUIPAMENTOS E ARTIGOS DE USO PESSOAL E DOMÉSTICO NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4651601',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE EQUIPAMENTOS DE INFORMÁTICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4651602',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE SUPRIMENTOS PARA INFORMÁTICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4652400',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE COMPONENTES ELETRÔNICOS E EQUIPAMENTOS DE TELEFONIA E COMUNICAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4661300',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE MÁQUINAS, APARELHOS E EQUIPAMENTOS PARA USO AGROPECUÁRIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4662100',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE MÁQUINAS, EQUIPAMENTOS PARA TERRAPLENAGEM, MINERAÇÃO E CONSTRUÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4663000',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE MÁQUINAS E EQUIPAMENTOS PARA USO INDUSTRIAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4664800',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE MÁQUINAS, APARELHOS E EQUIPAMENTOS PARA USO ODONTO MÉDICO HOSPITALAR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4665600',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE MÁQUINAS E EQUIPAMENTOS PARA USO COMERCIAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4669901',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE BOMBAS E COMPRESSORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4669999',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE OUTRAS MÁQUINAS E EQUIPAMENTOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4671100',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE MADEIRA E PRODUTOS DERIVADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4672900',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE FERRAGENS E FERRAMENTAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4673700',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE MATERIAL ELÉTRICO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4674500',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE CIMENTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4679601',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE TINTAS, VERNIZES E SIMILARES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4679602',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE MÁRMORES E GRANITOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4679603',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE VIDROS, ESPELHOS E VITRAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4679604',
    'cnae_description' => 'COMÉRCIO ATACADISTA ESPECIALIZADO DE MATERIAIS DE CONSTRUÇÃO NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4679699',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE MATERIAIS DE CONSTRUÇÃO EM GERAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4681801',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE ÁLCOOL CARBURANTE, BIODIESEL, GASOLINA E DEMAIS DERIVADOS DE PETRÓLEO, EXCETO LUBRIFICANTES, NÃO REALIZADO POR TRANSPORTADOR RETALHISTA (T.R.R.)',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4681802',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE COMBUSTÍVEIS REALIZADO POR TRANSPORTADOR RETALHISTA (T.R.R.)',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4681803',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE COMBUSTÍVEIS DE ORIGEM VEGETAL, EXCETO ÁLCOOL CARBURANTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4681804',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE COMBUSTÍVEIS DE ORIGEM MINERAL EM BRUTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4681805',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE LUBRIFICANTES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4682600',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE GÁS LIQÜEFEITO DE PETRÓLEO (GLP)',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4683400',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE DEFENSIVOS AGRÍCOLAS, ADUBOS, FERTILIZANTES E CORRETIVOS DO SOLO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4684201',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE RESINAS E ELASTÔMEROS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4684202',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE SOLVENTES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4684299',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE OUTROS PRODUTOS QUÍMICOS E PETROQUÍMICOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4685100',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE PRODUTOS SIDERÚRGICOS E METALÚRGICOS, EXCETO PARA CONSTRUÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4686901',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE PAPEL E PAPELÃO EM BRUTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4686902',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE EMBALAGENS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4687701',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE RESÍDUOS DE PAPEL E PAPELÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4687702',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE RESÍDUOS E SUCATAS NÃO METÁLICOS, EXCETO DE PAPEL E PAPELÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4687703',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE RESÍDUOS E SUCATAS METÁLICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4689301',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE PRODUTOS DA EXTRAÇÃO MINERAL, EXCETO COMBUSTÍVEIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4689302',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE FIOS E FIBRAS BENEFICIADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4689399',
    'cnae_description' => 'COMÉRCIO ATACADISTA ESPECIALIZADO EM OUTROS PRODUTOS INTERMEDIÁRIOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4691500',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE MERCADORIAS EM GERAL, COM PREDOMINÂNCIA DE PRODUTOS ALIMENTÍCIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4692300',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE MERCADORIAS EM GERAL, COM PREDOMINÂNCIA DE INSUMOS AGROPECUÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4693100',
    'cnae_description' => 'COMÉRCIO ATACADISTA DE MERCADORIAS EM GERAL, SEM PREDOMINÂNCIA DE ALIMENTOS OU DE INSUMOS AGROPECUÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4711301',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE MERCADORIAS EM GERAL, COM PREDOMINÂNCIA DE PRODUTOS ALIMENTÍCIOS   HIPERMERCADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4711302',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE MERCADORIAS EM GERAL, COM PREDOMINÂNCIA DE PRODUTOS ALIMENTÍCIOS - SUPERMERCADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4712100',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE MERCADORIAS EM GERAL, COM PREDOMINÂNCIA DE PRODUTOS ALIMENTÍCIOS - MINIMERCADOS, MERCEARIAS E ARMAZÉNS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4713002',
    'cnae_description' => 'LOJAS DE VARIEDADES, EXCETO LOJAS DE DEPARTAMENTOS OU MAGAZINES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4713004',
    'cnae_description' => 'LOJAS DE DEPARTAMENTOS OU MAGAZINES, EXCETO LOJAS FRANCAS (DUTY FREE)',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4713005',
    'cnae_description' => 'LOJAS FRANCAS (DUTY FREE) DE AEROPORTOS, PORTOS E EM FRONTEIRAS TERRESTRES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4721102',
    'cnae_description' => 'PADARIA E CONFEITARIA COM PREDOMINÂNCIA DE REVENDA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4721103',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE LATICÍNIOS E FRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4721104',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE DOCES, BALAS, BOMBONS E SEMELHANTES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4722901',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE CARNES - AÇOUGUES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4722902',
    'cnae_description' => 'PEIXARIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4723700',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE BEBIDAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4724500',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE HORTIFRUTIGRANJEIROS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4729601',
    'cnae_description' => 'TABACARIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4729602',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE MERCADORIAS EM LOJAS DE CONVENIÊNCIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4729699',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE PRODUTOS ALIMENTÍCIOS EM GERAL OU ESPECIALIZADO EM PRODUTOS ALIMENTÍCIOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4731800',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE COMBUSTÍVEIS PARA VEÍCULOS AUTOMOTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4732600',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE LUBRIFICANTES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4741500',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE TINTAS E MATERIAIS PARA PINTURA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4742300',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE MATERIAL ELÉTRICO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4743100',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE VIDROS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4744001',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE FERRAGENS E FERRAMENTAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4744002',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE MADEIRA E ARTEFATOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4744003',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE MATERIAIS HIDRÁULICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4744004',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE CAL, AREIA, PEDRA BRITADA, TIJOLOS E TELHAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4744005',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE MATERIAIS DE CONSTRUÇÃO NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4744006',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE PEDRAS PARA REVESTIMENTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4744099',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE MATERIAIS DE CONSTRUÇÃO EM GERAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4751201',
    'cnae_description' => 'COMÉRCIO VAREJISTA ESPECIALIZADO DE EQUIPAMENTOS E SUPRIMENTOS DE INFORMÁTICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4751202',
    'cnae_description' => 'RECARGA DE CARTUCHOS PARA EQUIPAMENTOS DE INFORMÁTICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4752100',
    'cnae_description' => 'COMÉRCIO VAREJISTA ESPECIALIZADO DE EQUIPAMENTOS DE TELEFONIA E COMUNICAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4753900',
    'cnae_description' => 'COMÉRCIO VAREJISTA ESPECIALIZADO DE ELETRODOMÉSTICOS E EQUIPAMENTOS DE ÁUDIO E VÍDEO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4754701',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE MÓVEIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4754702',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE ARTIGOS DE COLCHOARIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4754703',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE ARTIGOS DE ILUMINAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4755501',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE TECIDOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4755502',
    'cnae_description' => 'COMERCIO VAREJISTA DE ARTIGOS DE ARMARINHO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4755503',
    'cnae_description' => 'COMERCIO VAREJISTA DE ARTIGOS DE CAMA, MESA E BANHO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4756300',
    'cnae_description' => 'COMÉRCIO VAREJISTA ESPECIALIZADO DE INSTRUMENTOS MUSICAIS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4757100',
    'cnae_description' => 'COMÉRCIO VAREJISTA ESPECIALIZADO DE PEÇAS E ACESSÓRIOS PARA APARELHOS ELETROELETRÔNICOS PARA USO DOMÉSTICO, EXCETO INFORMÁTICA E COMUNICAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4759801',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE ARTIGOS DE TAPEÇARIA, CORTINAS E PERSIANAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4759899',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE OUTROS ARTIGOS DE USO PESSOAL E DOMÉSTICO NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4761001',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE LIVROS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4761002',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE JORNAIS E REVISTAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4761003',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE ARTIGOS DE PAPELARIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4762800',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE DISCOS, CDS, DVDS E FITAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4763601',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE BRINQUEDOS E ARTIGOS RECREATIVOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4763602',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE ARTIGOS ESPORTIVOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4763603',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE BICICLETAS E TRICICLOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4763604',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE ARTIGOS DE CAÇA, PESCA E CAMPING',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4763605',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE EMBARCAÇÕES E OUTROS VEÍCULOS RECREATIVOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4771701',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE PRODUTOS FARMACÊUTICOS, SEM MANIPULAÇÃO DE FÓRMULAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4771702',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE PRODUTOS FARMACÊUTICOS, COM MANIPULAÇÃO DE FÓRMULAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4771703',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE PRODUTOS FARMACÊUTICOS HOMEOPÁTICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4771704',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE MEDICAMENTOS VETERINÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4772500',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE COSMÉTICOS, PRODUTOS DE PERFUMARIA E DE HIGIENE PESSOAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4773300',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE ARTIGOS MÉDICOS E ORTOPÉDICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4774100',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE ARTIGOS DE ÓPTICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4781400',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE ARTIGOS DO VESTUÁRIO E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4782201',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE CALÇADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4782202',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE ARTIGOS DE VIAGEM',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4783101',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE ARTIGOS DE JOALHERIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4783102',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE ARTIGOS DE RELOJOARIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4784900',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE GÁS LIQÜEFEITO DE PETRÓLEO (GLP)',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4785701',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE ANTIGÜIDADES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4785799',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE OUTROS ARTIGOS USADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4789001',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE SUVENIRES, BIJUTERIAS E ARTESANATOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4789002',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE PLANTAS E FLORES NATURAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4789003',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE OBJETOS DE ARTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4789004',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE ANIMAIS VIVOS E DE ARTIGOS E ALIMENTOS PARA ANIMAIS DE ESTIMAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4789005',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE PRODUTOS SANEANTES DOMISSANITÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4789006',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE FOGOS DE ARTIFÍCIO E ARTIGOS PIROTÉCNICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4789007',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE EQUIPAMENTOS PARA ESCRITÓRIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4789008',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE ARTIGOS FOTOGRÁFICOS E PARA FILMAGEM',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4789009',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE ARMAS E MUNIÇÕES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4789099',
    'cnae_description' => 'COMÉRCIO VAREJISTA DE OUTROS PRODUTOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4911600',
    'cnae_description' => 'TRANSPORTE FERROVIÁRIO DE CARGA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4912401',
    'cnae_description' => 'TRANSPORTE FERROVIÁRIO DE PASSAGEIROS INTERMUNICIPAL E INTERESTADUAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4912402',
    'cnae_description' => 'TRANSPORTE FERROVIÁRIO DE PASSAGEIROS MUNICIPAL E EM REGIÃO METROPOLITANA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4912403',
    'cnae_description' => 'TRANSPORTE METROVIÁRIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4921301',
    'cnae_description' => 'TRANSPORTE RODOVIÁRIO COLETIVO DE PASSAGEIROS, COM ITINERÁRIO FIXO, MUNICIPAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4921302',
    'cnae_description' => 'TRANSPORTE RODOVIÁRIO COLETIVO DE PASSAGEIROS, COM ITINERÁRIO FIXO, INTERMUNICIPAL EM REGIÃO METROPOLITANA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4922101',
    'cnae_description' => 'TRANSPORTE RODOVIÁRIO COLETIVO DE PASSAGEIROS, COM ITINERÁRIO FIXO, INTERMUNICIPAL, EXCETO EM REGIÃO METROPOLITANA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4922102',
    'cnae_description' => 'TRANSPORTE RODOVIÁRIO COLETIVO DE PASSAGEIROS, COM ITINERÁRIO FIXO, INTERESTADUAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4922103',
    'cnae_description' => 'TRANSPORTE RODOVIÁRIO COLETIVO DE PASSAGEIROS, COM ITINERÁRIO FIXO, INTERNACIONAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4923001',
    'cnae_description' => 'SERVIÇO DE TÁXI',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4923002',
    'cnae_description' => 'SERVIÇO DE TRANSPORTE DE PASSAGEIROS - LOCAÇÃO DE AUTOMÓVEIS COM MOTORISTA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4924800',
    'cnae_description' => 'TRANSPORTE ESCOLAR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4929901',
    'cnae_description' => 'TRANSPORTE RODOVIÁRIO COLETIVO DE PASSAGEIROS, SOB REGIME DE FRETAMENTO, MUNICIPAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4929902',
    'cnae_description' => 'TRANSPORTE RODOVIÁRIO COLETIVO DE PASSAGEIROS, SOB REGIME DE FRETAMENTO, INTERMUNICIPAL, INTERESTADUAL E INTERNACIONAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4929903',
    'cnae_description' => 'ORGANIZAÇÃO DE EXCURSÕES EM VEÍCULOS RODOVIÁRIOS PRÓPRIOS, MUNICIPAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4929904',
    'cnae_description' => 'ORGANIZAÇÃO DE EXCURSÕES EM VEÍCULOS RODOVIÁRIOS PRÓPRIOS, INTERMUNICIPAL, INTERESTADUAL E INTERNACIONAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4929999',
    'cnae_description' => 'OUTROS TRANSPORTES RODOVIÁRIOS DE PASSAGEIROS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4930201',
    'cnae_description' => 'TRANSPORTE RODOVIÁRIO DE CARGA, EXCETO PRODUTOS PERIGOSOS E MUDANÇAS, MUNICIPAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4930202',
    'cnae_description' => 'TRANSPORTE RODOVIÁRIO DE CARGA, EXCETO PRODUTOS PERIGOSOS E MUDANÇAS, INTERMUNICIPAL, INTERESTADUAL E INTERNACIONAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4930203',
    'cnae_description' => 'TRANSPORTE RODOVIÁRIO DE PRODUTOS PERIGOSOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4930204',
    'cnae_description' => 'TRANSPORTE RODOVIÁRIO DE MUDANÇAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4940000',
    'cnae_description' => 'TRANSPORTE DUTOVIÁRIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '4950700',
    'cnae_description' => 'TRENS TURÍSTICOS, TELEFÉRICOS E SIMILARES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5011401',
    'cnae_description' => 'TRANSPORTE MARÍTIMO DE CABOTAGEM - CARGA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5011402',
    'cnae_description' => 'TRANSPORTE MARÍTIMO DE CABOTAGEM - PASSAGEIROS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5012201',
    'cnae_description' => 'TRANSPORTE MARÍTIMO DE LONGO CURSO - CARGA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5012202',
    'cnae_description' => 'TRANSPORTE MARÍTIMO DE LONGO CURSO - PASSAGEIROS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5021101',
    'cnae_description' => 'TRANSPORTE POR NAVEGAÇÃO INTERIOR DE CARGA, MUNICIPAL, EXCETO TRAVESSIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5021102',
    'cnae_description' => 'TRANSPORTE POR NAVEGAÇÃO INTERIOR DE CARGA, INTERMUNICIPAL, INTERESTADUAL E INTERNACIONAL, EXCETO TRAVESSIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5022001',
    'cnae_description' => 'TRANSPORTE POR NAVEGAÇÃO INTERIOR DE PASSAGEIROS EM LINHAS REGULARES, MUNICIPAL, EXCETO TRAVESSIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5022002',
    'cnae_description' => 'TRANSPORTE POR NAVEGAÇÃO INTERIOR DE PASSAGEIROS EM LINHAS REGULARES, INTERMUNICIPAL, INTERESTADUAL E INTERNACIONAL, EXCETO TRAVESSIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5030101',
    'cnae_description' => 'NAVEGAÇÃO DE APOIO MARÍTIMO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5030102',
    'cnae_description' => 'NAVEGAÇÃO DE APOIO PORTUÁRIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5030103',
    'cnae_description' => 'SERVIÇO DE REBOCADORES E EMPURRADORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5091201',
    'cnae_description' => 'TRANSPORTE POR NAVEGAÇÃO DE TRAVESSIA, MUNICIPAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5091202',
    'cnae_description' => 'TRANSPORTE POR NAVEGAÇÃO DE TRAVESSIA INTERMUNICIPAL, INTERESTADUAL E INTERNACIONAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5099801',
    'cnae_description' => 'TRANSPORTE AQUAVIÁRIO PARA PASSEIOS TURÍSTICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5099899',
    'cnae_description' => 'OUTROS TRANSPORTES AQUAVIÁRIOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5111100',
    'cnae_description' => 'TRANSPORTE AÉREO DE PASSAGEIROS REGULAR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5112901',
    'cnae_description' => 'SERVIÇO DE TÁXI AÉREO E LOCAÇÃO DE AERONAVES COM TRIPULAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5112999',
    'cnae_description' => 'OUTROS SERVIÇOS DE TRANSPORTE AÉREO DE PASSAGEIROS NÃO REGULAR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5120000',
    'cnae_description' => 'TRANSPORTE AÉREO DE CARGA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5130700',
    'cnae_description' => 'TRANSPORTE ESPACIAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5211701',
    'cnae_description' => 'ARMAZÉNS GERAIS - EMISSÃO DE WARRANT',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5211702',
    'cnae_description' => 'GUARDA MÓVEIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5211799',
    'cnae_description' => 'DEPÓSITOS DE MERCADORIAS PARA TERCEIROS, EXCETO ARMAZÉNS GERAIS E GUARDA MÓVEIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5212500',
    'cnae_description' => 'CARGA E DESCARGA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5221400',
    'cnae_description' => 'CONCESSIONÁRIAS DE RODOVIAS, PONTES, TÚNEIS E SERVIÇOS RELACIONADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5222200',
    'cnae_description' => 'TERMINAIS RODOVIÁRIOS E FERROVIÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5223100',
    'cnae_description' => 'ESTACIONAMENTO DE VEÍCULOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5229001',
    'cnae_description' => 'SERVIÇOS DE APOIO AO TRANSPORTE POR TÁXI, INCLUSIVE CENTRAIS DE CHAMADA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5229002',
    'cnae_description' => 'SERVIÇOS DE REBOQUE DE VEÍCULOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5229099',
    'cnae_description' => 'OUTRAS ATIVIDADES AUXILIARES DOS TRANSPORTES TERRESTRES NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5231101',
    'cnae_description' => 'ADMINISTRAÇÃO DA INFRAESTRUTURA PORTUÁRIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5231102',
    'cnae_description' => 'ATIVIDADES DO OPERADOR PORTUÁRIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5231103',
    'cnae_description' => 'GESTÃO DE TERMINAIS AQUAVIÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5232000',
    'cnae_description' => 'ATIVIDADES DE AGENCIAMENTO MARÍTIMO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5239701',
    'cnae_description' => 'SERVIÇOS DE PRATICAGEM',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5239799',
    'cnae_description' => 'ATIVIDADES AUXILIARES DOS TRANSPORTES AQUAVIÁRIOS NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5240101',
    'cnae_description' => 'OPERAÇÃO DOS AEROPORTOS E CAMPOS DE ATERRISSAGEM',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5240199',
    'cnae_description' => 'ATIVIDADES AUXILIARES DOS TRANSPORTES AÉREOS, EXCETO OPERAÇÃO DOS AEROPORTOS E CAMPOS DE ATERRISSAGEM',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5250801',
    'cnae_description' => 'COMISSARIA DE DESPACHOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5250802',
    'cnae_description' => 'ATIVIDADES DE DESPACHANTES ADUANEIROS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5250803',
    'cnae_description' => 'AGENCIAMENTO DE CARGAS, EXCETO PARA O TRANSPORTE MARÍTIMO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5250804',
    'cnae_description' => 'ORGANIZAÇÃO LOGÍSTICA DO TRANSPORTE DE CARGA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5250805',
    'cnae_description' => 'OPERADOR DE TRANSPORTE MULTIMODAL - OTM',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5310501',
    'cnae_description' => 'ATIVIDADES DO CORREIO NACIONAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5310502',
    'cnae_description' => 'ATIVIDADES DE FRANQUEADAS DO CORREIO NACIONAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5320201',
    'cnae_description' => 'SERVIÇOS DE MALOTE NÃO REALIZADOS PELO CORREIO NACIONAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5320202',
    'cnae_description' => 'SERVIÇOS DE ENTREGA RÁPIDA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5510801',
    'cnae_description' => 'HOTÉIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5510802',
    'cnae_description' => 'APART HOTÉIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5510803',
    'cnae_description' => 'MOTÉIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5590601',
    'cnae_description' => 'ALBERGUES, EXCETO ASSISTENCIAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5590602',
    'cnae_description' => 'CAMPINGS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5590603',
    'cnae_description' => 'PENSÕES(ALOJAMENTO)',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5590699',
    'cnae_description' => 'OUTROS ALOJAMENTOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5611201',
    'cnae_description' => 'RESTAURANTES E SIMILARES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5611203',
    'cnae_description' => 'LANCHONETES, CASAS DE CHÁ, DE SUCOS E SIMILARES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5611204',
    'cnae_description' => 'BARES E OUTROS ESTABELECIMENTOS ESPECIALIZADOS EM SERVIR BEBIDAS, SEM ENTRETENIMENTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5611205',
    'cnae_description' => 'BARES E OUTROS ESTABELECIMENTOS ESPECIALIZADOS EM SERVIR BEBIDAS, COM ENTRETENIMENTO ',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5612100',
    'cnae_description' => 'SERVIÇOS AMBULANTES DE ALIMENTAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5620101',
    'cnae_description' => 'FORNECIMENTO DE ALIMENTOS PREPARADOS PREPONDERANTEMENTE PARA EMPRESAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5620102',
    'cnae_description' => 'SERVIÇOS DE ALIMENTAÇÃO PARA EVENTOS E RECEPÇÕES - BUFÊ',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5620103',
    'cnae_description' => 'CANTINAS - SERVIÇOS DE ALIMENTAÇÃO PRIVATIVOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5620104',
    'cnae_description' => 'FORNECIMENTO DE ALIMENTOS PREPARADOS PREPONDERANTEMENTE PARA CONSUMO DOMICILIAR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5811500',
    'cnae_description' => 'EDIÇÃO DE LIVROS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5812301',
    'cnae_description' => 'EDIÇÃO DE JORNAIS DIÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5812302',
    'cnae_description' => 'EDIÇÃO DE JORNAIS NÃO DIÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5813100',
    'cnae_description' => 'EDIÇÃO DE REVISTAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5819100',
    'cnae_description' => 'EDIÇÃO DE CADASTROS, LISTAS E DE OUTROS PRODUTOS GRÁFICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5821200',
    'cnae_description' => 'EDIÇÃO INTEGRADA À IMPRESSÃO DE LIVROS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5822101',
    'cnae_description' => 'EDIÇÃO INTEGRADA À IMPRESSÃO DE JORNAIS DIÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5822102',
    'cnae_description' => 'EDIÇÃO INTEGRADA À IMPRESSÃO DE JORNAIS NÃO DIÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5823900',
    'cnae_description' => 'EDIÇÃO INTEGRADA À IMPRESSÃO DE REVISTAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5829800',
    'cnae_description' => 'EDIÇÃO INTEGRADA À IMPRESSÃO DE CADASTROS, LISTAS E DE OUTROS PRODUTOS GRÁFICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5911101',
    'cnae_description' => 'ESTÚDIOS CINEMATOGRÁFICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5911102',
    'cnae_description' => 'PRODUÇÃO DE FILMES PARA PUBLICIDADE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5911199',
    'cnae_description' => 'ATIVIDADES DE PRODUÇÃO CINEMATOGRÁFICA, DE VÍDEOS E DE PROGRAMAS DE TELEVISÃO NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5912001',
    'cnae_description' => 'SERVIÇOS DE DUBLAGEM',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5912002',
    'cnae_description' => 'SERVIÇOS DE MIXAGEM SONORA EM PRODUÇÃO AUDIOVISUAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5912099',
    'cnae_description' => 'ATIVIDADES DE PÓS PRODUÇÃO CINEMATOGRÁFICA, DE VÍDEOS E DE PROGRAMAS DE TELEVISÃO NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5913800',
    'cnae_description' => 'DISTRIBUIÇÃO CINEMATOGRÁFICA, DE VÍDEO E DE PROGRAMAS DE TELEVISÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5914600',
    'cnae_description' => 'ATIVIDADES DE EXIBIÇÃO CINEMATOGRÁFICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '5920100',
    'cnae_description' => 'ATIVIDADES DE GRAVAÇÃO DE SOM E DE EDIÇÃO DE MÚSICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6010100',
    'cnae_description' => 'ATIVIDADES DE RÁDIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6021700',
    'cnae_description' => 'ATIVIDADES DE TELEVISÃO ABERTA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6022501',
    'cnae_description' => 'PROGRAMADORAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6022502',
    'cnae_description' => 'ATIVIDADES RELACIONADAS À TELEVISÃO POR ASSINATURA, EXCETO PROGRAMADORAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6110801',
    'cnae_description' => 'SERVIÇOS DE TELEFONIA FIXA COMUTADA - STFC',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6110802',
    'cnae_description' => 'SERVIÇOS DE REDES DE TRANSPORTES DE TELECOMUNICAÇÕES - SRTT',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6110803',
    'cnae_description' => 'SERVIÇOS DE COMUNICAÇÃO MULTIMÍDIA - SCM',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6110899',
    'cnae_description' => 'SERVIÇOS DE TELECOMUNICAÇÕES POR FIO NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6120501',
    'cnae_description' => 'TELEFONIA MÓVEL CELULAR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6120502',
    'cnae_description' => 'SERVIÇO MÓVEL ESPECIALIZADO - SME',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6120599',
    'cnae_description' => 'SERVIÇOS DE TELECOMUNICAÇÕES SEM FIO NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6130200',
    'cnae_description' => 'TELECOMUNICAÇÕES POR SATÉLITE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6141800',
    'cnae_description' => 'OPERADORAS DE TELEVISÃO POR ASSINATURA POR CABO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6142600',
    'cnae_description' => 'OPERADORAS DE TELEVISÃO POR ASSINATURA POR MICROONDAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6143400',
    'cnae_description' => 'OPERADORAS DE TELEVISÃO POR ASSINATURA POR SATÉLITE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6190601',
    'cnae_description' => 'PROVEDORES DE ACESSO ÀS REDES DE COMUNICAÇÕES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6190602',
    'cnae_description' => 'PROVEDORES DE VOZ SOBRE PROTOCOLO INTERNET - VOIP',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6190699',
    'cnae_description' => 'OUTRAS ATIVIDADES DE TELECOMUNICAÇÕES NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6201501',
    'cnae_description' => 'DESENVOLVIMENTO DE PROGRAMAS DE COMPUTADOR SOB ENCOMENDA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6201502',
    'cnae_description' => 'WEB DESIGN',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6202300',
    'cnae_description' => 'DESENVOLVIMENTO E LICENCIAMENTO DE PROGRAMAS DE COMPUTADOR CUSTOMIZÁVEIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6203100',
    'cnae_description' => 'DESENVOLVIMENTO E LICENCIAMENTO DE PROGRAMAS DE COMPUTADOR NÃO CUSTOMIZÁVEIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6204000',
    'cnae_description' => 'CONSULTORIA EM TECNOLOGIA DA INFORMAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6209100',
    'cnae_description' => 'SUPORTE TÉCNICO, MANUTENÇÃO E OUTROS SERVIÇOS EM TECNOLOGIA DA INFORMAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6311900',
    'cnae_description' => 'TRATAMENTO DE DADOS, PROVEDORES DE SERVIÇOS DE APLICAÇÃO E SERVIÇOS DE HOSPEDAGEM NA INTERNET',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6319400',
    'cnae_description' => 'PORTAIS, PROVEDORES DE CONTEÚDO E OUTROS SERVIÇOS DE INFORMAÇÃO NA INTERNET',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6391700',
    'cnae_description' => 'AGÊNCIAS DE NOTÍCIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6399200',
    'cnae_description' => 'OUTRAS ATIVIDADES DE PRESTAÇÃO DE SERVIÇOS DE INFORMAÇÃO NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6410700',
    'cnae_description' => 'BANCO CENTRAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6421200',
    'cnae_description' => 'BANCOS COMERCIAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6422100',
    'cnae_description' => 'BANCOS MÚLTIPLOS, COM CARTEIRA COMERCIAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6423900',
    'cnae_description' => 'CAIXAS ECONÔMICAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6424701',
    'cnae_description' => 'BANCOS COOPERATIVOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6424702',
    'cnae_description' => 'COOPERATIVAS CENTRAIS DE CRÉDITO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6424703',
    'cnae_description' => 'COOPERATIVAS DE CRÉDITO MÚTUO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6424704',
    'cnae_description' => 'COOPERATIVAS DE CRÉDITO RURAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6431000',
    'cnae_description' => 'BANCOS MÚLTIPLOS, SEM CARTEIRA COMERCIAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6432800',
    'cnae_description' => 'BANCOS DE INVESTIMENTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6433600',
    'cnae_description' => 'BANCOS DE DESENVOLVIMENTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6434400',
    'cnae_description' => 'AGÊNCIAS DE FOMENTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6435201',
    'cnae_description' => 'SOCIEDADES DE CRÉDITO IMOBILIÁRIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6435202',
    'cnae_description' => 'ASSOCIAÇÕES DE POUPANÇA E EMPRÉSTIMO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6435203',
    'cnae_description' => 'COMPANHIAS HIPOTECÁRIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6436100',
    'cnae_description' => 'SOCIEDADES DE CRÉDITO, FINANCIAMENTO E INVESTIMENTO - FINANCEIRAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6437900',
    'cnae_description' => 'SOCIEDADES DE CRÉDITO AO MICROEMPREENDEDOR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6438701',
    'cnae_description' => 'BANCOS DE CÂMBIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6438799',
    'cnae_description' => 'OUTRAS INSTITUIÇÕES DE INTERMEDIAÇÃO NÃO MONETÁRIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6440900',
    'cnae_description' => 'ARRENDAMENTO MERCANTIL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6450600',
    'cnae_description' => 'SOCIEDADES DE CAPITALIZAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6461100',
    'cnae_description' => 'HOLDINGS DE INSTITUIÇÕES FINANCEIRAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6462000',
    'cnae_description' => 'HOLDINGS DE INSTITUIÇÕES NÃO FINANCEIRAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6463800',
    'cnae_description' => 'OUTRAS SOCIEDADES DE PARTICIPAÇÃO, EXCETO HOLDINGS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6470101',
    'cnae_description' => 'FUNDOS DE INVESTIMENTO, EXCETO PREVIDENCIÁRIOS E IMOBILIÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6470102',
    'cnae_description' => 'FUNDOS DE INVESTIMENTO PREVIDENCIÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6470103',
    'cnae_description' => 'FUNDOS DE INVESTIMENTO IMOBILIÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6491300',
    'cnae_description' => 'SOCIEDADES DE FOMENTO MERCANTIL - FACTORING',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6492100',
    'cnae_description' => 'SECURITIZAÇÃO DE CRÉDITOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6493000',
    'cnae_description' => 'ADMINISTRAÇÃO DE CONSÓRCIOS PARA AQUISIÇÃO DE BENS E DIREITOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6499901',
    'cnae_description' => 'CLUBES DE INVESTIMENTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6499902',
    'cnae_description' => 'SOCIEDADES DE INVESTIMENTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6499903',
    'cnae_description' => 'FUNDO GARANTIDOR DE CRÉDITO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6499904',
    'cnae_description' => 'CAIXAS DE FINANCIAMENTO DE CORPORAÇÕES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6499905',
    'cnae_description' => 'CONCESSÃO DE CRÉDITO PELAS OSCIP',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6499999',
    'cnae_description' => 'OUTRAS ATIVIDADES DE SERVIÇOS FINANCEIROS NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6511101',
    'cnae_description' => 'SOCIEDADE SEGURADORA DE SEGUROS VIDA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6511102',
    'cnae_description' => 'PLANOS DE AUXÍLIO FUNERAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6512000',
    'cnae_description' => 'SOCIEDADE SEGURADORA DE SEGUROS NÃO VIDA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6520100',
    'cnae_description' => 'SOCIEDADE SEGURADORA DE SEGUROS SAÚDE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6530800',
    'cnae_description' => 'RESSEGUROS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6541300',
    'cnae_description' => 'PREVIDÊNCIA COMPLEMENTAR FECHADA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6542100',
    'cnae_description' => 'PREVIDÊNCIA COMPLEMENTAR ABERTA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6550200',
    'cnae_description' => 'PLANOS DE SAÚDE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6611801',
    'cnae_description' => 'BOLSA DE VALORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6611802',
    'cnae_description' => 'BOLSA DE MERCADORIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6611803',
    'cnae_description' => 'BOLSA DE MERCADORIAS E FUTUROS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6611804',
    'cnae_description' => 'ADMINISTRAÇÃO DE MERCADOS DE BALCÃO ORGANIZADOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6612601',
    'cnae_description' => 'CORRETORAS DE TÍTULOS E VALORES MOBILIÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6612602',
    'cnae_description' => 'DISTRIBUIDORAS DE TÍTULOS E VALORES MOBILIÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6612603',
    'cnae_description' => 'CORRETORAS DE CÂMBIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6612604',
    'cnae_description' => 'CORRETORAS DE CONTRATOS DE MERCADORIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6612605',
    'cnae_description' => 'AGENTES DE INVESTIMENTOS EM APLICAÇÕES FINANCEIRAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6613400',
    'cnae_description' => 'ADMINISTRAÇÃO DE CARTÕES DE CRÉDITO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6619301',
    'cnae_description' => 'SERVIÇOS DE LIQUIDAÇÃO E CUSTÓDIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6619302',
    'cnae_description' => 'CORRESPONDENTES DE INSTITUIÇÕES FINANCEIRAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6619303',
    'cnae_description' => 'REPRESENTAÇÕES DE BANCOS ESTRANGEIROS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6619304',
    'cnae_description' => 'CAIXAS ELETRÔNICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6619305',
    'cnae_description' => 'OPERADORAS DE CARTÕES DE DÉBITO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6619399',
    'cnae_description' => 'OUTRAS ATIVIDADES AUXILIARES DOS SERVIÇOS FINANCEIROS NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6621501',
    'cnae_description' => 'PERITOS E AVALIADORES DE SEGUROS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6621502',
    'cnae_description' => 'AUDITORIA E CONSULTORIA ATUARIAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6622300',
    'cnae_description' => 'CORRETORES E AGENTES DE SEGUROS, DE PLANOS DE PREVIDÊNCIA COMPLEMENTAR E DE SAÚDE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6629100',
    'cnae_description' => 'ATIVIDADES AUXILIARES DOS SEGUROS, DA PREVIDÊNCIA COMPLEMENTAR E DOS PLANOS DE SAÚDE NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6630400',
    'cnae_description' => 'ATIVIDADES DE ADMINISTRAÇÃO DE FUNDOS POR CONTRATO OU COMISSÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6810201',
    'cnae_description' => 'COMPRA E VENDA DE IMÓVEIS PRÓPRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6810202',
    'cnae_description' => 'ALUGUEL DE IMÓVEIS PRÓPRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6810203',
    'cnae_description' => 'LOTEAMENTO DE IMÓVEIS PRÓPRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6821801',
    'cnae_description' => 'CORRETAGEM NA COMPRA E VENDA E AVALIAÇÃO DE IMÓVEIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6821802',
    'cnae_description' => 'CORRETAGEM NO ALUGUEL DE IMÓVEIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6822600',
    'cnae_description' => 'GESTÃO E ADMINISTRAÇÃO DA PROPRIEDADE IMOBILIARIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6911701',
    'cnae_description' => 'SERVIÇOS ADVOCATÍCIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6911702',
    'cnae_description' => 'ATIVIDADES AUXILIARES DA JUSTIÇA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6911703',
    'cnae_description' => 'AGENTE DE PROPRIEDADE INDUSTRIAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6912500',
    'cnae_description' => 'CARTÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6920601',
    'cnae_description' => 'ATIVIDADES DE CONTABILIDADE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '6920602',
    'cnae_description' => 'ATIVIDADES DE CONSULTORIA E AUDITORIA CONTÁBIL E TRIBUTÁRIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7020400',
    'cnae_description' => 'ATIVIDADES DE CONSULTORIA EM GESTÃO EMPRESARIAL, EXCETO CONSULTORIA TÉCNICA ESPECÍFICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7111100',
    'cnae_description' => 'SERVIÇOS DE ARQUITETURA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7112000',
    'cnae_description' => 'SERVIÇOS DE ENGENHARIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7119701',
    'cnae_description' => 'SERVIÇOS DE CARTOGRAFIA, TOPOGRAFIA E GEODÉSIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7119702',
    'cnae_description' => 'ATIVIDADES DE ESTUDOS GEOLÓGICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7119703',
    'cnae_description' => 'SERVIÇOS DE DESENHO TÉCNICO RELACIONADOS À ARQUITETURA E ENGENHARIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7119704',
    'cnae_description' => 'SERVIÇOS DE PERÍCIA TÉCNICA RELACIONADOS À SEGURANÇA DO TRABALHO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7119799',
    'cnae_description' => 'ATIVIDADES TÉCNICAS RELACIONADAS À ENGENHARIA E ARQUITETURA NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7120100',
    'cnae_description' => 'TESTES E ANÁLISES TÉCNICAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7210000',
    'cnae_description' => 'PESQUISA E DESENVOLVIMENTO EXPERIMENTAL EM CIÊNCIAS FÍSICAS E NATURAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7220700',
    'cnae_description' => 'PESQUISA E DESENVOLVIMENTO EXPERIMENTAL EM CIÊNCIAS SOCIAIS E HUMANAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7311400',
    'cnae_description' => 'AGÊNCIAS DE PUBLICIDADE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7312200',
    'cnae_description' => 'AGENCIAMENTO DE ESPAÇOS PARA PUBLICIDADE, EXCETO EM VEÍCULOS DE COMUNICAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7319001',
    'cnae_description' => 'CRIAÇÃO ESTANDES PARA FEIRAS E EXPOSIÇÕES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7319002',
    'cnae_description' => 'PROMOÇÃO DE VENDAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7319003',
    'cnae_description' => 'MARKETING DIRETO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7319004',
    'cnae_description' => 'CONSULTORIA EM PUBLICIDADE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7319099',
    'cnae_description' => 'OUTRAS ATIVIDADES DE PUBLICIDADE NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7320300',
    'cnae_description' => 'PESQUISAS DE MERCADO E DE OPINIÃO PÚBLICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7410202',
    'cnae_description' => 'DESIGN DE INTERIORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7410203',
    'cnae_description' => 'DESIGN DE PRODUTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7410299',
    'cnae_description' => 'ATIVIDADES DE DESIGN NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7420001',
    'cnae_description' => 'ATIVIDADES DE PRODUÇÃO DE FOTOGRAFIAS, EXCETO AÉREA E SUBMARINA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7420002',
    'cnae_description' => 'ATIVIDADES DE PRODUÇÃO DE FOTOGRAFIAS AÉREAS E SUBMARINAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7420003',
    'cnae_description' => 'LABORATÓRIOS FOTOGRÁFICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7420004',
    'cnae_description' => 'FILMAGEM DE FESTAS E EVENTOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7420005',
    'cnae_description' => 'SERVIÇOS DE MICROFILMAGEM',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7490101',
    'cnae_description' => 'SERVIÇOS DE TRADUÇÃO, INTERPRETAÇÃO E SIMILARES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7490102',
    'cnae_description' => 'ESCAFANDRIA E MERGULHO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7490103',
    'cnae_description' => 'SERVIÇOS DE AGRONOMIA E DE CONSULTORIA ÀS ATIVIDADES AGRÍCOLAS E PECUÁRIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7490104',
    'cnae_description' => 'ATIVIDADES DE INTERMEDIAÇÃO E AGENCIAMENTO DE SERVIÇOS E NEGÓCIOS EM GERAL, EXCETO IMOBILIÁRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7490105',
    'cnae_description' => 'AGENCIAMENTO DE PROFISSIONAIS PARA ATIVIDADES ESPORTIVAS, CULTURAIS E ARTÍSTICAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7490199',
    'cnae_description' => 'OUTRAS ATIVIDADES PROFISSIONAIS, CIENTÍFICAS E TÉCNICAS NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7500100',
    'cnae_description' => 'ATIVIDADES VETERINÁRIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7711000',
    'cnae_description' => 'LOCAÇÃO DE AUTOMÓVEIS SEM CONDUTOR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7719501',
    'cnae_description' => 'LOCAÇÃO DE EMBARCAÇÕES SEM TRIPULAÇÃO, EXCETO PARA FINS RECREATIVOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7719502',
    'cnae_description' => 'LOCAÇÃO DE AERONAVES SEM TRIPULAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7719599',
    'cnae_description' => 'LOCAÇÃO DE OUTROS MEIOS DE TRANSPORTE NÃO ESPECIFICADOS ANTERIORMENTE, SEM CONDUTOR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7721700',
    'cnae_description' => 'ALUGUEL DE EQUIPAMENTOS RECREATIVOS E ESPORTIVOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7722500',
    'cnae_description' => 'ALUGUEL DE FITAS DE VÍDEO, DVDS E SIMILARES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7723300',
    'cnae_description' => 'ALUGUEL DE OBJETOS DO VESTUÁRIO, JÓIAS E ACESSÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7729201',
    'cnae_description' => 'ALUGUEL DE APARELHOS DE JOGOS ELETRÔNICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7729202',
    'cnae_description' => 'ALUGUEL DE MÓVEIS, UTENSÍLIOS E APARELHOS DE USO DOMÉSTICO E PESSOAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7729203',
    'cnae_description' => 'ALUGUEL DE MATERIAL MÉDICO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7729299',
    'cnae_description' => 'ALUGUEL DE OUTROS OBJETOS PESSOAIS E DOMÉSTICOS NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7731400',
    'cnae_description' => 'ALUGUEL DE MÁQUINAS E EQUIPAMENTOS AGRÍCOLAS SEM OPERADOR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7732201',
    'cnae_description' => 'ALUGUEL DE MÁQUINAS E EQUIPAMENTOS PARA CONSTRUÇÃO SEM OPERADOR, EXCETO ANDAIMES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7732202',
    'cnae_description' => 'ALUGUEL DE ANDAIMES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7733100',
    'cnae_description' => 'ALUGUEL DE MÁQUINAS E EQUIPAMENTOS PARA ESCRITÓRIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7739001',
    'cnae_description' => 'ALUGUEL DE MÁQUINAS E EQUIPAMENTOS PARA EXTRAÇÃO DE MINÉRIOS E PETRÓLEO, SEM OPERADOR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7739002',
    'cnae_description' => 'ALUGUEL DE EQUIPAMENTOS CIENTÍFICOS, MÉDICOS E HOSPITALARES, SEM OPERADOR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7739003',
    'cnae_description' => 'ALUGUEL DE PALCOS, COBERTURAS E OUTRAS ESTRUTURAS DE USO TEMPORÁRIO, EXCETO ANDAIMES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7739099',
    'cnae_description' => 'ALUGUEL DE OUTRAS MÁQUINAS E EQUIPAMENTOS COMERCIAIS E INDUSTRIAIS NÃO ESPECIFICADOS ANTERIORMENTE, SEM OPERADOR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7740300',
    'cnae_description' => 'GESTÃO DE ATIVOS INTANGÍVEIS NÃO FINANCEIROS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7810800',
    'cnae_description' => 'SELEÇÃO E AGENCIAMENTO DE MÃO DE OBRA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7820500',
    'cnae_description' => 'LOCAÇÃO DE MÃO DE OBRA TEMPORÁRIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7830200',
    'cnae_description' => 'FORNECIMENTO E GESTÃO DE RECURSOS HUMANOS PARA TERCEIROS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7911200',
    'cnae_description' => 'AGÊNCIAS DE VIAGENS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7912100',
    'cnae_description' => 'OPERADORES TURÍSTICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '7990200',
    'cnae_description' => 'SERVIÇOS DE RESERVAS E OUTROS SERVIÇOS DE TURISMO NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8011101',
    'cnae_description' => 'ATIVIDADES DE VIGILÂNCIA E SEGURANÇA PRIVADA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8011102',
    'cnae_description' => 'SERVIÇOS DE ADESTRAMENTO DE CÃES DE GUARDA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8012900',
    'cnae_description' => 'ATIVIDADES DE TRANSPORTE DE VALORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8020001',
    'cnae_description' => 'ATIVIDADES DE MONITORAMENTO DE SISTEMAS DE SEGURANÇA ELETRÔNICO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8020002',
    'cnae_description' => 'OUTRAS ATIVIDADES DE SERVIÇOS DE SEGURANÇA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8030700',
    'cnae_description' => 'ATIVIDADES DE INVESTIGAÇÃO PARTICULAR',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8111700',
    'cnae_description' => 'SERVIÇOS COMBINADOS PARA APOIO A EDIFÍCIOS, EXCETO CONDOMÍNIOS PREDIAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8112500',
    'cnae_description' => 'CONDOMÍNIOS PREDIAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8121400',
    'cnae_description' => 'LIMPEZA EM PRÉDIOS E EM DOMICÍLIOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8122200',
    'cnae_description' => 'IMUNIZAÇÃO E CONTROLE DE PRAGAS URBANAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8129000',
    'cnae_description' => 'ATIVIDADES DE LIMPEZA NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8130300',
    'cnae_description' => 'ATIVIDADES PAISAGÍSTICAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8211300',
    'cnae_description' => 'SERVIÇOS COMBINADOS DE ESCRITÓRIO E APOIO ADMINISTRATIVO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8219901',
    'cnae_description' => 'FOTOCÓPIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8219999',
    'cnae_description' => 'PREPARAÇÃO DE DOCUMENTOS E SERVIÇOS ESPECIALIZADOS DE APOIO ADMINISTRATIVO NÃO ESPECIFICADOS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8220200',
    'cnae_description' => 'ATIVIDADES DE TELEATENDIMENTO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8230001',
    'cnae_description' => 'SERVIÇOS DE ORGANIZAÇÃO DE FEIRAS, CONGRESSOS, EXPOSIÇÕES E FESTAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8230002',
    'cnae_description' => 'CASAS DE FESTAS E EVENTOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8291100',
    'cnae_description' => 'ATIVIDADES DE COBRANÇAS E INFORMAÇÕES CADASTRAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8292000',
    'cnae_description' => 'ENVASAMENTO E EMPACOTAMENTO SOB CONTRATO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8299701',
    'cnae_description' => 'MEDIÇÃO DE CONSUMO DE ENERGIA ELÉTRICA, GÁS E ÁGUA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8299702',
    'cnae_description' => 'EMISSÃO DE VALES ALIMENTAÇÃO, VALES TRANSPORTE E SIMILARES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8299703',
    'cnae_description' => 'SERVIÇOS DE GRAVAÇÃO DE CARIMBOS, EXCETO CONFECÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8299704',
    'cnae_description' => 'LEILOEIROS INDEPENDENTES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8299705',
    'cnae_description' => 'SERVIÇOS DE LEVANTAMENTO DE FUNDOS SOB CONTRATO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8299706',
    'cnae_description' => 'CASAS LOTÉRICAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8299707',
    'cnae_description' => 'SALAS DE ACESSO À INTERNET',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8299799',
    'cnae_description' => 'OUTRAS ATIVIDADES DE SERVIÇOS PRESTADOS PRINCIPALMENTE ÀS EMPRESAS NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8411600',
    'cnae_description' => 'ADMINISTRAÇÃO PÚBLICA EM GERAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8412400',
    'cnae_description' => 'REGULAÇÃO DAS ATIVIDADES DE SAÚDE, EDUCAÇÃO, SERVIÇOS CULTURAIS E OUTROS SERVIÇOS SOCIAIS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8413200',
    'cnae_description' => 'REGULAÇÃO DAS ATIVIDADES ECONÔMICAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8421300',
    'cnae_description' => 'RELAÇÕES EXTERIORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8422100',
    'cnae_description' => 'DEFESA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8423000',
    'cnae_description' => 'JUSTIÇA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8424800',
    'cnae_description' => 'SEGURANÇA E ORDEM PÚBLICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8425600',
    'cnae_description' => 'DEFESA CIVIL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8430200',
    'cnae_description' => 'SEGURIDADE SOCIAL OBRIGATÓRIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8511200',
    'cnae_description' => 'EDUCAÇÃO INFANTIL - CRECHE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8512100',
    'cnae_description' => 'EDUCAÇÃO INFANTIL - PRÉESCOLA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8513900',
    'cnae_description' => 'ENSINO FUNDAMENTAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8520100',
    'cnae_description' => 'ENSINO MÉDIO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8531700',
    'cnae_description' => 'EDUCAÇÃO SUPERIOR - GRADUAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8532500',
    'cnae_description' => 'EDUCAÇÃO SUPERIOR - GRADUAÇÃO E PÓS GRADUAÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8533300',
    'cnae_description' => 'EDUCAÇÃO SUPERIOR - PÓS GRADUAÇÃO E EXTENSÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8541400',
    'cnae_description' => 'EDUCAÇÃO PROFISSIONAL DE NÍVEL TÉCNICO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8542200',
    'cnae_description' => 'EDUCAÇÃO PROFISSIONAL DE NÍVEL TECNOLÓGICO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8550301',
    'cnae_description' => 'ADMINISTRAÇÃO DE CAIXAS ESCOLARES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8550302',
    'cnae_description' => 'ATIVIDADES DE APOIO À EDUCAÇÃO, EXCETO CAIXAS ESCOLARES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8591100',
    'cnae_description' => 'ENSINO DE ESPORTES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8592901',
    'cnae_description' => 'ENSINO DE DANÇA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8592902',
    'cnae_description' => 'ENSINO DE ARTES CÊNICAS, EXCETO DANÇA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8592903',
    'cnae_description' => 'ENSINO DE MÚSICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8592999',
    'cnae_description' => 'ENSINO DE ARTE E CULTURA NÃO ESPECIFICADO ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8593700',
    'cnae_description' => 'ENSINO DE IDIOMAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8599601',
    'cnae_description' => 'FORMAÇÃO DE CONDUTORES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8599602',
    'cnae_description' => 'CURSOS DE PILOTAGEM',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8599603',
    'cnae_description' => 'TREINAMENTO EM INFORMÁTICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8599604',
    'cnae_description' => 'TREINAMENTO EM DESENVOLVIMENTO PROFISSIONAL E GERENCIAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8599605',
    'cnae_description' => 'CURSOS PREPARATÓRIOS PARA CONCURSOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8599699',
    'cnae_description' => 'OUTRAS ATIVIDADES DE ENSINO NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8610101',
    'cnae_description' => 'ATIVIDADES DE ATENDIMENTO HOSPITALAR, EXCETO PRONTO SOCORRO E UNIDADES PARA ATENDIMENTO A URGÊNCIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8610102',
    'cnae_description' => 'ATIVIDADES DE ATENDIMENTO EM PRONTO SOCORRO E UNIDADES HOSPITALARES PARA ATENDIMENTO A URGÊNCIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8621601',
    'cnae_description' => 'UTI MÓVEL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8621602',
    'cnae_description' => 'SERVIÇOS MÓVEIS DE ATENDIMENTO A URGÊNCIAS, EXCETO POR UTI MÓVEL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8622400',
    'cnae_description' => 'SERVIÇOS DE REMOÇÃO DE PACIENTES, EXCETO OS SERVIÇOS MÓVEIS DE ATENDIMENTO A URGÊNCIAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8630501',
    'cnae_description' => 'ATIVIDADE MÉDICA AMBULATORIAL COM RECURSOS PARA REALIZAÇÃO DE PROCEDIMENTOS CIRÚRGICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8630502',
    'cnae_description' => 'ATIVIDADE MÉDICA AMBULATORIAL COM RECURSOS PARA REALIZAÇÃO DE EXAMES COMPLEMENTARES',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8630503',
    'cnae_description' => 'ATIVIDADE MÉDICA AMBULATORIAL RESTRITA A CONSULTAS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8630504',
    'cnae_description' => 'ATIVIDADE ODONTOLÓGICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8630506',
    'cnae_description' => 'SERVIÇOS DE VACINAÇÃO E IMUNIZAÇÃO HUMANA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8630507',
    'cnae_description' => 'ATIVIDADES DE REPRODUÇÃO HUMANA ASSISTIDA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8630599',
    'cnae_description' => 'ATIVIDADES DE ATENÇÃO AMBULATORIAL NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8640201',
    'cnae_description' => 'LABORATÓRIOS DE ANATOMIA PATOLÓGICA E CITOLÓGICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8640202',
    'cnae_description' => 'LABORATÓRIOS CLÍNICOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8640203',
    'cnae_description' => 'SERVIÇOS DE DIÁLISE E NEFROLOGIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8640204',
    'cnae_description' => 'SERVIÇOS DE TOMOGRAFIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8640205',
    'cnae_description' => 'SERVIÇOS DE DIAGNÓSTICO POR IMAGEM COM USO DE RADIAÇÃO IONIZANTE, EXCETO TOMOGRAFIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8640206',
    'cnae_description' => 'SERVIÇOS DE RESSONÂNCIA MAGNÉTICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8640207',
    'cnae_description' => 'SERVIÇOS DE DIAGNÓSTICO POR IMAGEM SEM USO DE RADIAÇÃO IONIZANTE, EXCETO RESSONÂNCIA MAGNÉTICA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8640208',
    'cnae_description' => 'SERVIÇOS DE DIAGNÓSTICO POR REGISTRO GRÁFICO - ECG, EEG E OUTROS EXAMES ANÁLOGOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8640209',
    'cnae_description' => 'SERVIÇOS DE DIAGNÓSTICO POR MÉTODOS ÓPTICOS - ENDOSCOPIA E OUTROS EXAMES ANÁLOGOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8640210',
    'cnae_description' => 'SERVIÇOS DE QUIMIOTERAPIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8640211',
    'cnae_description' => 'SERVIÇOS DE RADIOTERAPIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8640212',
    'cnae_description' => 'SERVIÇOS DE HEMOTERAPIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8640213',
    'cnae_description' => 'SERVIÇOS DE LITOTRIPCIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8640214',
    'cnae_description' => 'SERVIÇOS DE BANCOS DE CÉLULAS E TECIDOS HUMANOS',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8640299',
    'cnae_description' => 'ATIVIDADES DE SERVIÇOS DE COMPLEMENTAÇÃO DIAGNÓSTICA E TERAPÊUTICA NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8650001',
    'cnae_description' => 'ATIVIDADES DE ENFERMAGEM',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8650002',
    'cnae_description' => 'ATIVIDADES DE PROFISSIONAIS DA NUTRIÇÃO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8650003',
    'cnae_description' => 'ATIVIDADES DE PSICOLOGIA E PSICANÁLISE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8650004',
    'cnae_description' => 'ATIVIDADES DE FISIOTERAPIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8650005',
    'cnae_description' => 'ATIVIDADES DE TERAPIA OCUPACIONAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8650006',
    'cnae_description' => 'ATIVIDADES DE FONOAUDIOLOGIA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8650007',
    'cnae_description' => 'ATIVIDADES DE TERAPIA DE NUTRIÇÃO ENTERAL E PARENTERAL',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8650099',
    'cnae_description' => 'ATIVIDADES DE PROFISSIONAIS DA ÁREA DE SAÚDE NÃO ESPECIFICADAS ANTERIORMENTE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8660700',
    'cnae_description' => 'ATIVIDADES DE APOIO À GESTÃO DE SAÚDE',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8690901',
    'cnae_description' => 'ATIVIDADES DE PRÁTICAS INTEGRATIVAS E COMPLEMENTARES EM SAÚDE HUMANA',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
    'cnae_id' => '8690902',
    'cnae_description' => 'ATIVIDADES DE BANCO DE LEITE HUMANO',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '8690903',
        'cnae_description' => 'ATIVIDADES DE ACUPUNTURA',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '8690904',
        'cnae_description' => 'ATIVIDADES DE PODOLOGIA',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '8690999',
        'cnae_description' => 'OUTRAS ATIVIDADES DE ATENÇÃO À SAÚDE HUMANA NÃO ESPECIFICADAS ANTERIORMENTE',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '8711501',
        'cnae_description' => 'CLÍNICAS E RESIDÊNCIAS GERIÁTRICAS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '8711502',
        'cnae_description' => 'INSTITUIÇÕES DE LONGA PERMANÊNCIA PARA IDOSOS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '8711503',
        'cnae_description' => 'ATIVIDADES DE ASSISTÊNCIA A DEFICIENTES FÍSICOS, IMUNODEPRIMIDOS E CONVALESCENTES',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '8711504',
        'cnae_description' => 'CENTROS DE APOIO A PACIENTES COM CÂNCER E COM AIDS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '8711505',
        'cnae_description' => 'CONDOMÍNIOS RESIDENCIAIS PARA IDOSOS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '8712300',
        'cnae_description' => 'ATIVIDADES DE FORNECIMENTO DE INFRAESTRUTURA DE APOIO E ASSISTÊNCIA A PACIENTE NO DOMICÍLIO',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '8720401',
        'cnae_description' => 'ATIVIDADES DE CENTROS DE ASSISTÊNCIA PSICOSSOCIAL',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '8720499',
        'cnae_description' => 'ATIVIDADES DE ASSISTÊNCIA PSICOSSOCIAL E À SAÚDE A PORTADORES DE DISTÚRBIOS PSÍQUICOS, DEFICIÊNCIA MENTAL E DEPENDÊNCIA QUÍMICA E GRUPOS SIMILARES NÃO ESPECIFICADAS ANTERIORMENTE',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '8730101',
        'cnae_description' => 'ORFANATOS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '8730102',
        'cnae_description' => 'ALBERGUES ASSISTENCIAIS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '8730199',
        'cnae_description' => 'ATIVIDADES DE ASSISTÊNCIA SOCIAL PRESTADAS EM RESIDÊNCIAS COLETIVAS E PARTICULARES NÃO ESPECIFICADAS ANTERIORMENTE',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '8800600',
        'cnae_description' => 'SERVIÇOS DE ASSISTÊNCIA SOCIAL SEM ALOJAMENTO',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9001901',
        'cnae_description' => 'PRODUÇÃO TEATRAL',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9001902',
        'cnae_description' => 'PRODUÇÃO MUSICAL',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9001903',
        'cnae_description' => 'PRODUÇÃO DE ESPETÁCULOS DE DANÇA',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9001904',
        'cnae_description' => 'PRODUÇÃO DE ESPETÁCULOS CIRCENSES, DE MARIONETES E SIMILARES',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9001905',
        'cnae_description' => 'PRODUÇÃO DE ESPETÁCULOS DE RODEIOS, VAQUEJADAS E SIMILARES',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9001906',
        'cnae_description' => 'ATIVIDADES DE SONORIZAÇÃO E DE ILUMINAÇÃO',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9001999',
        'cnae_description' => 'ARTES CÊNICAS, ESPETÁCULOS E ATIVIDADES COMPLEMENTARES NÃO ESPECIFICADAS ANTERIORMENTE',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9002701',
        'cnae_description' => 'ATIVIDADES DE ARTISTAS PLÁSTICOS, JORNALISTAS INDEPENDENTES E ESCRITORES',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9002702',
        'cnae_description' => 'RESTAURAÇÃO DE OBRAS DE ARTE',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9003500',
        'cnae_description' => 'GESTÃO DE ESPAÇOS PARA ARTES CÊNICAS, ESPETÁCULOS E OUTRAS ATIVIDADES ARTÍSTICAS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9101500',
        'cnae_description' => 'ATIVIDADES DE BIBLIOTECAS E ARQUIVOS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9102301',
        'cnae_description' => 'ATIVIDADES DE MUSEUS E DE EXPLORAÇÃO DE LUGARES E PRÉDIOS HISTÓRICOS E ATRAÇÕES SIMILARES',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9102302',
        'cnae_description' => 'RESTAURAÇÃO E CONSERVAÇÃO DE LUGARES E PRÉDIOS HISTÓRICOS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9103100',
        'cnae_description' => 'ATIVIDADES DE JARDINS BOTÂNICOS, ZOOLÓGICOS, PARQUES NACIONAIS, RESERVAS ECOLÓGICAS E ÁREAS DE PROTEÇÃO AMBIENTAL',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9200301',
        'cnae_description' => 'CASAS DE BINGO',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9200302',
        'cnae_description' => 'EXPLORAÇÃO DE APOSTAS EM CORRIDAS DE CAVALOS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9200399',
        'cnae_description' => 'EXPLORAÇÃO DE JOGOS DE AZAR E APOSTAS NÃO ESPECIFICADOS ANTERIORMENTE',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9311500',
        'cnae_description' => 'GESTÃO DE INSTALAÇÕES DE ESPORTES',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9312300',
        'cnae_description' => 'CLUBES SOCIAIS, ESPORTIVOS E SIMILARES',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9313100',
        'cnae_description' => 'ATIVIDADES DE CONDICIONAMENTO FÍSICO',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9319101',
        'cnae_description' => 'PRODUÇÃO E PROMOÇÃO DE EVENTOS ESPORTIVOS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9319199',
        'cnae_description' => 'OUTRAS ATIVIDADES ESPORTIVAS NÃO ESPECIFICADAS ANTERIORMENTE',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9321200',
        'cnae_description' => 'PARQUES DE DIVERSÃO E PARQUES TEMÁTICOS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9329801',
        'cnae_description' => 'DISCOTECAS, DANCETERIAS, SALÕES DE DANÇA E SIMILARES',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9329802',
        'cnae_description' => 'EXPLORAÇÃO DE BOLICHES',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9329803',
        'cnae_description' => 'EXPLORAÇÃO DE JOGOS DE SINUCA, BILHAR E SIMILARES',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9329804',
        'cnae_description' => 'EXPLORAÇÃO DE JOGOS ELETRÔNICOS RECREATIVOS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9329899',
        'cnae_description' => 'OUTRAS ATIVIDADES DE RECREAÇÃO E LAZER NÃO ESPECIFICADAS ANTERIORMENTE',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9411100',
        'cnae_description' => 'ATIVIDADES DE ORGANIZAÇÕES ASSOCIATIVAS PATRONAIS E EMPRESARIAIS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9412001',
        'cnae_description' => 'ATIVIDADES DE FISCALIZAÇÃO PROFISSIONAL',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9412099',
        'cnae_description' => 'OUTRAS ATIVIDADES ASSOCIATIVAS PROFISSIONAIS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9420100',
        'cnae_description' => 'ATIVIDADES DE ORGANIZAÇÕES SINDICAIS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9430800',
        'cnae_description' => 'ATIVIDADES DE ASSOCIAÇÕES DE DEFESA DE DIREITOS SOCIAIS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9491000',
        'cnae_description' => 'ATIVIDADES DE ORGANIZAÇÕES RELIGIOSAS OU FILOSÓFICAS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9492800',
        'cnae_description' => 'ATIVIDADES DE ORGANIZAÇÕES POLÍTICAS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9493600',
        'cnae_description' => 'ATIVIDADES DE ORGANIZAÇÕES ASSOCIATIVAS LIGADAS À CULTURA E À ARTE',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9499500',
        'cnae_description' => 'ATIVIDADES ASSOCIATIVAS NÃO ESPECIFICADAS ANTERIORMENTE',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9511800',
        'cnae_description' => 'REPARAÇÃO E MANUTENÇÃO DE COMPUTADORES E DE EQUIPAMENTOS PERIFÉRICOS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9512600',
        'cnae_description' => 'REPARAÇÃO E MANUTENÇÃO DE EQUIPAMENTOS DE COMUNICAÇÃO',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9521500',
        'cnae_description' => 'REPARAÇÃO E MANUTENÇÃO DE EQUIPAMENTOS ELETROELETRÔNICOS DE USO PESSOAL E DOMÉSTICO',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9529101',
        'cnae_description' => 'REPARAÇÃO DE CALÇADOS, DE BOLSAS E ARTIGOS DE VIAGEM',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9529102',
        'cnae_description' => 'CHAVEIROS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9529103',
        'cnae_description' => 'REPARAÇÃO DE RELÓGIOS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9529104',
        'cnae_description' => 'REPARAÇÃO DE BICICLETAS, TRICICLOS E OUTROS VEÍCULOS NÃO MOTORIZADOS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9529105',
        'cnae_description' => 'REPARAÇÃO DE ARTIGOS DO MOBILIÁRIO',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9529106',
        'cnae_description' => 'REPARAÇÃO DE JÓIAS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9529199',
        'cnae_description' => 'REPARAÇÃO E MANUTENÇÃO DE OUTROS OBJETOS E EQUIPAMENTOS PESSOAIS E DOMÉSTICOS NÃO ESPECIFICADOS ANTERIORMENTE',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9601701',
        'cnae_description' => 'LAVANDERIAS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9601702',
        'cnae_description' => 'TINTURARIAS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9601703',
        'cnae_description' => 'TOALHEIROS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9602501',
        'cnae_description' => 'CABELEIREIROS, MANICURE E PEDICURE',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9602502',
        'cnae_description' => 'ATIVIDADES DE ESTÉTICA E OUTROS SERVIÇOS DE CUIDADOS COM A BELEZA',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9603301',
        'cnae_description' => 'GESTÃO E MANUTENÇÃO DE CEMITÉRIOS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9603302',
        'cnae_description' => 'SERVIÇOS DE CREMAÇÃO',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9603303',
        'cnae_description' => 'SERVIÇOS DE SEPULTAMENTO',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9603304',
        'cnae_description' => 'SERVIÇOS DE FUNERÁRIAS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9603305',
        'cnae_description' => 'SERVIÇOS DE SOMATOCONSERVAÇÃO',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9603399',
        'cnae_description' => 'ATIVIDADES FUNERÁRIAS E SERVIÇOS RELACIONADOS NÃO ESPECIFICADOS ANTERIORMENTE',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9609202',
        'cnae_description' => 'AGÊNCIAS MATRIMONIAIS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9609204',
        'cnae_description' => 'EXPLORAÇÃO DE MÁQUINAS DE SERVIÇOS PESSOAIS ACIONADAS POR MOEDA',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9609205',
        'cnae_description' => 'ATIVIDADES DE SAUNA E BANHOS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9609206',
        'cnae_description' => 'SERVIÇOS DE TATUAGEM E COLOCAÇÃO DE PIERCING',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9609207',
        'cnae_description' => 'ALOJAMENTO DE ANIMAIS DOMÉSTICOS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9609208',
        'cnae_description' => 'HIGIENE E EMBELEZAMENTO DE ANIMAIS DOMÉSTICOS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9609299',
        'cnae_description' => 'OUTRAS ATIVIDADES DE SERVIÇOS PESSOAIS NÃO ESPECIFICADAS ANTERIORMENTE',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9700500',
        'cnae_description' => 'SERVIÇOS DOMÉSTICOS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ],

    [
        'cnae_id' => '9900800',
        'cnae_description' => 'ORGANISMOS INTERNACIONAIS E OUTRAS INSTITUIÇÕES EXTRATERRITORIAIS',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ]

];

    DB::table('cnae_listas')->insert($cnaes);

    }
}
