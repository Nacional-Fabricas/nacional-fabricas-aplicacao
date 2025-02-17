@extends('layouts.painel')
@section('content')

    <div class="meu-site">

        @if($site)

            <div class="bloco-imagens">
                <h1>Área de Imagens</h1>
                <hr>

                <!-- Banner -->
                <div class="image-preview-container">
                    <div class="image-preview" id="banner-container">
                        <img id="banner-preview"
                             src="{{ $site->banner ? asset('images/sites/backgrounds/' . $site->banner) : '' }}"
                             alt="Banner" class="preview-image">
                        <div class="placeholder" style="display: {{ $site->banner ? 'none' : 'flex' }}">Banner</div>
                        <button class="icone-editar" data-campo="banner" data-bs-toggle="modal" data-bs-target="#modalCrop">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                    </div>
                    <input type="file" id="banner-input" accept="image/*" style="display: none;">
                </div>

                <!-- Logo -->
                <div class="image-preview-container">
                    <div class="image-preview" id="logo-container">
                        <img id="logo-preview"
                             src="{{ $site->logo ? asset('images/sites/logos/' . $site->logo) : '' }}"
                             alt="Logo" class="preview-image">
                        <div class="placeholder" style="display: {{ $site->logo ? 'none' : 'flex' }}">Logo</div>
                        <button class="icone-editar" data-campo="logo" data-bs-toggle="modal" data-bs-target="#modalCrop">
                            <i class="fas fa-pencil-alt"></i>
                        </button>
                    </div>
                    <input type="file" id="logo-input" accept="image/*" style="display: none;">
                </div>

                <div class="linha">
                    <!-- Primeira Imagem -->
                    <div class="container-preview-imagem">
                        <div class="preview-imagem" id="primeira-container">
                            <img id="primeira-preview"
                                 src="{{ $site->primeiro_destaque ? asset('images/sites/imagens-destaque/' . $site->primeiro_destaque) : '' }}"
                                 alt="Primeira Imagem" class="imagem-preview">
                            <div class="placeholder" style="display: {{ $site->primeiro_destaque ? 'none' : 'flex' }}">Primeira Imagem</div>
                            <button class="icone-editar" data-campo="primeira" data-bs-toggle="modal" data-bs-target="#modalCrop">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                        </div>
                        <input type="file" id="primeira-input" accept="image/*" style="display: none;">
                    </div>

                    <!-- Segunda Imagem -->
                    <div class="container-preview-imagem">
                        <div class="preview-imagem" id="segunda-container">
                            <img id="segunda-preview"
                                 src="{{ $site->segundo_destaque ? asset('images/sites/imagens-destaque/' . $site->segundo_destaque) : '' }}"
                                 alt="Segunda Imagem" class="imagem-preview">
                            <div class="placeholder" style="display: {{ $site->segundo_destaque ? 'none' : 'flex' }}">Segunda Imagem</div>
                            <button class="icone-editar" data-campo="segunda" data-bs-toggle="modal" data-bs-target="#modalCrop">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                        </div>
                        <input type="file" id="segunda-input" accept="image/*" style="display: none;">
                    </div>

                    <!-- Terceira Imagem -->
                    <div class="container-preview-imagem">
                        <div class="preview-imagem" id="terceira-container">
                            <img id="terceira-preview"
                                 src="{{ $site->terceiro_destaque ? asset('images/sites/imagens-destaque/' . $site->terceiro_destaque) : '' }}"
                                 alt="Terceira Imagem" class="imagem-preview">
                            <div class="placeholder" style="display: {{ $site->terceiro_destaque ? 'none' : 'flex' }}">Terceira Imagem</div>
                            <button class="icone-editar" data-campo="terceira" data-bs-toggle="modal" data-bs-target="#modalCrop">
                                <i class="fas fa-pencil-alt"></i>
                            </button>
                        </div>
                        <input type="file" id="terceira-input" accept="image/*" style="display: none;">
                    </div>
                </div>
            </div>

            @include('pages.site.atualizar-site')

        @else

            @include('pages.site.criar-site')

        @endif

    </div>

@endsection
