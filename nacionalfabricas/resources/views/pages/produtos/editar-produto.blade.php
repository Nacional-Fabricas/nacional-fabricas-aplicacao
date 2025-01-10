@extends('layouts.dashboard')
@section('content')

    <div class="editar-produto">
        <!-- Seção da Logo -->
        <div class="bloco-logo">

            <div class="cabecalho-logo">
                <h1>Logo do Produto</h1>
            </div>

            <div class="conteudo-logo">
                <div class="container-logo">
                    <img id="previsualizarLogo"
                         src="{{ asset('storage/images/thumbnails/' . $produto->produto_thumbnail) }}"
                         alt="Logo do produto">
                    <button id="editarLogo" class="icone-editar-imagem">
                        <i class="fas fa-pen"></i>
                    </button>
                    <input type="file" id="inputArquivoLogo" class="d-none" accept="image/*">
                </div>

            </div>

        </div>

        <!-- Galeria de Imagens -->
        <div class="bloco">
            <div class="cabecalho">
                <h1>Galeria de Imagens</h1>
            </div>
            <div class="bloco-conteudo">
                <div class="bloco-galeria">
                    @foreach($album as $index => $fotoAlbum)
                        <div class="container-imagem">
                            <!-- Imagem da galeria -->
                            <img class="imagem-album" src="{{ asset('images/album/' . $fotoAlbum->url_imagem) }}" alt="Foto {{$index}} da galeria" data-id="{{ $fotoAlbum->id }}" data-bs-toggle="modal" data-bs-target="#modalRecorteImagem{{$fotoAlbum->id}}">

                            <!-- Ícone de edição (caneta) -->
                            <button class="icone-editar-imagem" data-id="{{ $fotoAlbum->id }}">
                                <i class="fas fa-pen"></i>
                            </button>

                            <!-- Input de arquivo para substituição da imagem -->
                            <input type="file" class="d-none" id="inputArquivo{{$fotoAlbum->id}}" accept="image/*">
                        </div>

                        <!-- Modal para recorte da imagem -->
                        <div class="modal fade" id="modalRecorteImagem{{$fotoAlbum->id}}" tabindex="-1" aria-labelledby="modalRecorteImagem{{$fotoAlbum->id}}Label" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalRecorteImagem{{$fotoAlbum->id}}Label">Recortar Imagem</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="img-container">
                                            <img id="imagemRecorte{{$fotoAlbum->id}}" class="img-fluid" alt="Recorte da imagem">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-primary" id="salvarRecorte{{$fotoAlbum->id}}">Salvar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Modal para recorte -->
        <div class="modal fade" id="modalRecorteLogo" tabindex="-1" aria-labelledby="modalRecorteLogoLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalRecorteLogoLabel">Recortar Logo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="img-container">
                            <img id="imagemRecorteLogo" class="img-fluid" alt="Recortar logo">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" id="salvarRecorteLogo" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </div>

        <form action="{{route('salvar_produto')}}" class="formulario" id="form" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input name="id" value="{{$produto -> id}}" type="hidden">

            <div class="bloco">

                <div class="cabecalho">

                    <h1>Informações do produto</h1>

                </div>

                <div class="bloco-conteudo">

                    <div class="linha">

                        <div class="grupo">

                            <label for="ativo">

                                Produto ativo

                                <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Somente Produtos ativos, poderão ser visitados.">
                                    i
                                </button>

                            </label>

                            <select name="ativo">

                                @foreach (['Sim', 'Não'] as $opcao)

                                    <option value="{{ $opcao }}" {{ $produto->ativo === $opcao ? 'selected' : '' }}>{{ $opcao }}</option>

                                @endforeach

                            </select>

                        </div>

                        <div class="grupo">

                            <label for="destaque">

                                Produto em destaque?

                                <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Produtos em Destaque, apareceção na Home e na página de sua Fábrica.">
                                    i
                                </button>

                            </label>
                            <select name="destaque" id="destaque">
                                @if($produto -> destaque === "Sim")

                                    <option value="{{$produto -> destaque}}">{{$produto -> destaque}}</option>
                                    <option value="Não">Não</option>

                                @else

                                    <option value="{{$produto -> destaque}}">{{$produto -> destaque}}</option>
                                    <option value="Sim">Sim</option>

                                @endif

                            </select>

                        </div>

                        <div class="grupo">

                            <label for="preco_min">

                                Preço Mínimo

                                <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Será exibido quando possuir também o Preço Máximo.">
                                    i
                                </button>

                            </label>
                            <input name="preco_min" step="any" type="number" value="{{ $produto -> preco_min }}">

                        </div>

                        <div class="grupo">

                            <label for="preco_max">

                                Preço Máximo

                                <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Será exibido quando possuir também o Preço Mínimo.">
                                    i
                                </button>

                            </label>
                            <input name="preco_max" step="any" type="number" value="{{ $produto -> preco_max }}">

                        </div>

                    </div>

                    <div class="linha">

                        <div class="grupo">

                            <label for="produto_nome">Nome do Produto</label>
                            <input name="produto_nome" value="{{$produto -> produto_nome}}" type="text">

                        </div>

                    </div>

                    <div class="linha">

                        <div class="grupo">

                            <label for="quantidade">qtd min.</label>
                            <input name="quantidade" value="{{$produto -> quantidade}}" type="number">

                        </div>

                        <div class="grupo">

                            <label for="sku">Código do produto (SKU)</label>
                            <input name="sku" value="{{$produto -> sku}}" type="text">

                        </div>

                        <div class="grupo">

                            <label for="ncm">NCM</label>
                            <input name="ncm" value="{{$produto -> ncm}}" type="text">

                        </div>

                        <div class="grupo">

                            <label for="">GTIN</label>
                            <input name="gtin" value="{{$produto -> gtin}}" type="text">

                        </div>

                    </div>

                    <div class="linha">

                        <div class="grupo">

                            <label for="descricao">

                                Descrição breve

                                <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Aparecerá logo abaixo dos códigos do Produto.">
                                    i
                                </button>

                            </label>
                            <textarea name="descricao" id="descricao" cols="30" rows="10">{{$produto -> descricao}}</textarea>

                        </div>

                    </div>

                </div>

            </div>

            <div class="bloco">

                <div class="cabecalho">

                    <h1>Pesos e dimensões</h1>

                </div>

                <div class="bloco-conteudo">

                    <div class="bloco-textos">

                        <div class="linha">

                            <div class="grupo">

                                <label for="peso">Peso</label>
                                <input name="peso" value="{{$produto -> peso}}" type="text">

                            </div>

                            <div class="grupo">

                                <label for="altura">Altura</label>
                                <input name="altura" value="{{$produto -> altura}}" type="text">

                            </div>

                            <div class="grupo">

                                <label for="largura">largura</label>
                                <input name="largura" value="{{$produto -> largura}}" type="text">

                            </div>

                            <div class="grupo">

                                <label for="profundidade">Profundidade</label>
                                <input name="profundidade" value="{{$produto -> profundidade}}" type="text">

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="bloco">

                <div class="cabecalho">

                    <h1>Informações adicionais</h1>

                </div>

                <div class="bloco-conteudo">

                    <div class="bloco-textos">

                        <div class="linha">

                            <div class="grupo">

                                <label for="info_add">

                                    Adicione informações técnicas, características fisicas ou modo de funcionamento do seu produto.

                                    <button type="button" class="tooltip-icon" data-toggle="tooltip" data-placement="bottom" title="Será exibido no bloco Informações Adicionais na Página do Produto.">
                                        i
                                    </button>

                                </label>

                                <textarea name="info_add" cols="45" rows="10">{{ $produto -> info_add }}</textarea>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="bloco">

                <div class="cabecalho">

                    <h1>Categorização</h1>

                </div>

                <div class="bloco-conteudo">

                    <div class="linha">

                        <div class="grupo">

                            <label>Categorias</label>
                            <select name="categorias" id="categorias">

                                <option value="{{ $produto -> categorias }}">{{ $produto -> categorias }}</option>

                                @foreach($categorias as $categoria)

                                    <option value="{{ $categoria-> nome }}">{{ $categoria-> nome }}</option>

                                @endforeach

                            </select>

                        </div>

                    </div>

                </div>

            </div>

            <div class="block botoes">

                <button type="submit">Salvar</button>

            </div>

        </form>

    </div>

@endsection

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/cropperjs@1.5.13/dist/cropper.min.css" rel="stylesheet">
    <style>
        .img-container {
            max-width: 100%;
            max-height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .img-container img {
            max-width: 100%;
        }

        .container-logo {
            position: relative;
            display: inline-block;
            margin: 10px;
        }

        .icone-editar-imagem {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            border: none;
            padding: 5px;
            border-radius: 50%;
            cursor: pointer;
        }

        .icone-editar-imagem i {
            font-size: 18px;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/cropperjs@1.5.13/dist/cropper.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const previsualizarLogo = document.getElementById('previsualizarLogo');
            const editarLogo = document.getElementById('editarLogo');
            const inputArquivoLogo = document.getElementById('inputArquivoLogo');
            const modalRecorteLogo = new bootstrap.Modal(document.getElementById('modalRecorteLogo'));
            const salvarRecorteLogo = document.getElementById('salvarRecorteLogo');
            const imagemRecorteLogo = document.getElementById('imagemRecorteLogo');
            let cropper;

            const produtoId = @json($produto->id);
            const contaId = @json($produto->id_conta);
            const csrfToken = '{{ csrf_token() }}';

            // Abrir seletor de arquivo ao clicar no botão de edição
            editarLogo.addEventListener('click', () => {
                inputArquivoLogo.click();
            });

            // Carregar a imagem selecionada no modal
            inputArquivoLogo.addEventListener('change', (event) => {
                const file = event.target.files[0];

                if (file) {
                    const reader = new FileReader();

                    reader.onload = (e) => {
                        imagemRecorteLogo.src = e.target.result;
                        modalRecorteLogo.show();

                        if (cropper) {
                            cropper.destroy();
                        }

                        cropper = new Cropper(imagemRecorteLogo, {
                            aspectRatio: 1,
                            viewMode: 1,
                        });
                    };

                    reader.readAsDataURL(file);
                }
            });

            // Salvar recorte
            salvarRecorteLogo.addEventListener('click', () => {
                if (cropper) {
                    cropper.getCroppedCanvas({
                        width: 300,
                        height: 300,
                    }).toBlob((blob) => {
                        if (blob) {
                            const formData = new FormData();
                            formData.append('image', blob, 'logo.jpg');
                            formData.append('id_produto', produtoId);
                            formData.append('id_conta', contaId);

                            fetch("{{ route('recortar_imagem_produto') }}", {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': csrfToken
                                },
                                body: formData
                            })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.sucesso) {
                                        previsualizarLogo.src = data.nova_imagem;
                                        modalRecorteLogo.hide();
                                    } else {
                                        alert('Erro ao salvar a logo.');
                                    }
                                })
                                .catch(error => {
                                    console.error('Erro:', error);
                                });
                        }
                    });
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const iconesEditarImagem = document.querySelectorAll('.icone-editar-imagem');
            let cropper;

            iconesEditarImagem.forEach(icone => {
                icone.addEventListener('click', (event) => {
                    // Ao clicar no ícone, aciona o input de arquivo correspondente
                    const idImagem = event.target.closest('button').dataset.id;
                    const inputArquivo = document.getElementById('inputArquivo' + idImagem);
                    inputArquivo.click();
                });
            });

            // Quando uma nova imagem for selecionada
            const inputsArquivo = document.querySelectorAll('input[type="file"]');
            inputsArquivo.forEach(input => {
                input.addEventListener('change', (event) => {
                    const file = event.target.files[0];
                    const idImagem = event.target.id.replace('inputArquivo', '');
                    const modalRecorte = new bootstrap.Modal(document.getElementById('modalRecorteImagem' + idImagem));
                    const imagemRecorte = document.getElementById('imagemRecorte' + idImagem);

                    if (file) {
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            imagemRecorte.src = e.target.result;
                            modalRecorte.show();

                            if (cropper) {
                                cropper.destroy();  // Destrói qualquer instância anterior do Cropper
                            }

                            cropper = new Cropper(imagemRecorte, {
                                aspectRatio: 1,
                                viewMode: 1,
                            });
                        };
                        reader.readAsDataURL(file);
                    }
                });
            });

            // Salvar o recorte
            const salvarRecortes = document.querySelectorAll('.btn-primary[id^="salvarRecorte"]');
            salvarRecortes.forEach(botao => {
                botao.addEventListener('click', (event) => {
                    const idImagem = event.target.id.replace('salvarRecorte', '');
                    const imagemRecorte = document.getElementById('imagemRecorte' + idImagem);

                    if (cropper) {
                        cropper.getCroppedCanvas({
                            width: 300,
                            height: 300,
                        }).toBlob((blob) => {
                            if (blob) {
                                const formData = new FormData();
                                formData.append('image', blob, 'imagem.jpg');
                                formData.append('id_imagem', idImagem); // Passa o ID da imagem para o backend

                                fetch("{{ route('salvar_imagem_galeria') }}", {
                                    method: 'POST',
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    },
                                    body: formData
                                })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.sucesso) {
                                            // Atualiza a imagem na galeria com a nova imagem cortada
                                            const img = document.querySelector(`img[data-id="${idImagem}"]`);
                                            img.src = data.nova_imagem;
                                            modalRecorte.hide();
                                        } else {
                                            alert('Erro ao salvar a imagem.');
                                        }
                                    })
                                    .catch(error => {
                                        console.error('Erro:', error);
                                    });
                            }
                        });
                    }
                });
            });
        });

    </script>

@endpush
