<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Produto;
use App\Observers\ProdutoObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Paginator::useBootstrap();
        Produto::observe(ProdutoObserver::class);
    }
}
