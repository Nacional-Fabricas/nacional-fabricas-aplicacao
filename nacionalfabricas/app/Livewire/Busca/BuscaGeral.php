<?php

namespace App\Livewire\Busca;

use App\Models\Estado;
use App\Models\Segmento;
use Livewire\Component;

class BuscaGeral extends Component
{
    public $tipo = 'Produtos';
    public $busca = '';
    public $estado = '';
    public $cidade = '';
    public $segmento = '';
    public $estados = [];
    public $segmentos = [];

    public function mount()
    {
        $this->estados = Estado::all(); // Ajuste o modelo
        $this->segmentos = Segmento::all(); // Ajuste o modelo
    }

    public function buscar()
    {
        // Implementar a lógica da busca
        $this->emit('realizarBusca', $this->tipo, $this->busca, $this->estado, $this->cidade, $this->segmento);
    }

    public function render()
    {
        $estados = $this->estados;
        $segmentos = $this->segmentos;
        $tipo = $this -> tipo;

        return view('livewire.busca.busca-geral', compact('estados', 'segmentos', 'tipo'));
    }
}
