<?php

namespace App\Livewire\Layout;

use App\Models\Cadastro;
use Livewire\Component;
use Auth;

/**
 * Classe responsável por gerenciar o cabeçalho do layout.
 *
 * Recupera informações do cadastro do usuário com base no time atual
 * ou no próprio usuário, para exibição no cabeçalho.
 */
class Header extends Component
{
    /**
     * Renderiza o componente de cabeçalho.
     *
     * - Usa o ID do time atual ou o ID do próprio usuário para buscar o cadastro.
     * - Passa o cadastro encontrado para a view.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {

        // Obtém o usuário autenticado
        $usuario = Auth::user();

        // Determina o ID da conta: time atual ou próprio ID do usuário, ou null se o usuário não estiver autenticado
        $usuarioId = $usuario ? ($usuario->current_team_id ?? $usuario->id) : null;

        // Recupera o cadastro relacionado ao ID da conta, ou null se não houver usuário
        $cadastro = $usuarioId ? Cadastro::where('id_conta', $usuarioId)->first() : null;

        // Retorna a view do cabeçalho com os dados do cadastro
        return view('livewire.layout.header', compact('cadastro'));
    }
}
