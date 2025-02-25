<?php
namespace App\Livewire\Busca;

use App\Models\Estado;
use App\Models\Segmento;
use Livewire\Component;

class BuscaGeral extends Component
{
    public $tipo = 'Fábricas';
    public $busca = '';
    public $estados = [];
    public $segmentos = [];

    public function render()
    {

        $tipo = $this->tipo;

        return view('livewire.busca.busca-geral', [
            'estados' => $this->estados,
            'segmentos' => $this->segmentos,
            'tipo' => $this->tipo,
        ]);
    }
}
