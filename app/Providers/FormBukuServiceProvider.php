<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Penerbit;
use App\Kategori;

class FormBukuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('form', function($view) {
            $view->with('list_penerbit', Penerbit::pluck('nama_penerbit', 'id'));
            $view->with('list_kategori', Kategori::pluck('nama_kategori', 'id'));
        });
    }
}
