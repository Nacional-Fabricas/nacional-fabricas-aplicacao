<?php

namespace App\Console\Commands;

use App\Models\Cadastro;
use App\Models\Pagina;
use App\Models\PaginaSocial;
use App\Models\Site;
use GuzzleHttp\Client;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProcessApiRequests extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:process-api-requests';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Processe as requisições das APIs todas as manhãs';
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $paginasSociais = PaginaSocial::all();
        $client = new Client();

        foreach ($paginasSociais as $pagina) {
            try {
                $response = $client->get('https://instagram230.p.rapidapi.com/user/details', [
                    'query' => ['username' => $pagina->username],
                    'headers' => [
                        'X-RapidAPI-Key' => '1015259036msh41ba2f8aba99d4dp16d098jsnfa26c4ffa991',
                        'X-RapidAPI-Host' => 'instagram230.p.rapidapi.com',
                    ],
                ]);

                $data = json_decode($response->getBody(), true);

                if (isset($data['data']['user'])) {
                    $pagina->nome = $data['data']['user']['full_name'];
                    $pagina->biografia = $data['data']['user']['biography'];

                    // Download e salvar imagem de perfil
                    $imageUrl = $data['data']['user']['profile_pic_url_hd'];
                    if ($imageUrl) {
                        $imageContents = file_get_contents($imageUrl);
                        $imageName = $pagina->username . '.jpg';
                        $path = 'paginas-sociais/' . $imageName;
                        Storage::disk('public')->put($path, $imageContents);
                        $pagina->image = $path;
                    }

                    Log::info($pagina->toArray());  // Log the PaginaSocial details before saving

                    $pagina->save();
                    Log::info("Dados salvos para: {$pagina->username}");

                } else {
                    Log::warning("Nenhum dado encontrado para: {$pagina->username}");
                }
            } catch (\Exception $e) {
                Log::error("Erro ao processar: {$pagina->username} - " . $e->getMessage());
            }
        }
    }
}
