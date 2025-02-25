<?php
namespace App\Livewire\Busca;

use App\Models\Estado;
use App\Models\Segmento;
use Livewire\Component;

class BuscaGeral extends Component
{
    public $tipo = 'Produtos';
    public $busca = '';
    public $estado = [];
    public $segmento = [];

    public function render()
    {

        $tipo = $this->tipo;
        $estados =  Estado::orderBy('sigla', 'asc') -> get();
        $segmentos = Segmento::orderBy('nomeSegmento', 'asc') -> get();

        return view('livewire.busca.busca-geral', [
            'estado' => $this->estado,
            'estados' => $estados,
            'segmentos' => $segmentos,
            'segmento' => $this->segmento,
            'tipo' => $this->tipo,
        ]);
    }
}
