<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $fillable = [

        'id_conta',
        'banner',
        'logo',
        'nome_industria',
        'descricao_industria',
        'segmento',
        'produtos_tipo',
        'tributacao',
        'tempo_resposta',
        'primeiro_destaque',
        'segundo_destaque',
        'terceiro_destaque',
        'atendimento',
        'email',
        'telefone',
        'estado',
        'cidade',
        'cep',
        'bairro',
        'endereco',
        'numero',
        'local_atuacao'
    ];

    protected $casts = [

        'items' => 'array'
    ];

    protected $dates = ['date'];

    protected $guarded = [];

    public function albums()
    {
        return $this->hasMany(Album::class, 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($site) {
            // Excluir os álbuns associados
            foreach ($site->albums as $album) {
                // Exclua o arquivo de imagem
                if (\Storage::exists($album->url_imagem)) {
                    \Storage::delete($album->url_imagem);
                }

                // Exclua o registro do álbum
                $album->delete();
            }
        });
    }

}
