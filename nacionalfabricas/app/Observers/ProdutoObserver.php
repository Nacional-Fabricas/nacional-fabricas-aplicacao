<?php

namespace App\Observers;

use App\Models\Produto;
use Illuminate\Support\Facades\File;

class ProdutoObserver
{
    /**
     * Handle the Produto "created" event.
     */
    public function created(Produto $produto): void
    {
        // Caminho do arquivo do seeder
        $path = database_path('seeders/ProdutoSeeder.php');

        // Estrutura do novo registro
        $novoProduto = "[
            'nome' => '{$produto->produto_nome}',
            'thumbnail' => '{$produto->produto_thumbnail}'
        ],";

        // Lê o conteúdo atual do seeder
        $conteudo = File::get($path);

        // Encontra o array de produtos e insere o novo produto
        $conteudoAtualizado = preg_replace(
            '/(\$produto\s*=\s*\[)(.*?)(\];)/s',
            "$1$2\n    $novoProduto$3",
            $conteudo
        );

        // Atualiza o arquivo seeder
        File::put($path, $conteudoAtualizado);
    }

    /**
     * Handle the Produto "updated" event.
     */
    public function updated(Produto $produto): void
    {
        //
    }

    /**
     * Handle the Produto "deleted" event.
     */
    public function deleted(Produto $produto): void
    {
        //
    }

    /**
     * Handle the Produto "restored" event.
     */
    public function restored(Produto $produto): void
    {
        //
    }

    /**
     * Handle the Produto "force deleted" event.
     */
    public function forceDeleted(Produto $produto): void
    {
        //
    }
}
