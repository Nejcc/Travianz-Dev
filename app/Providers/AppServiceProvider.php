<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Way\Generators\GeneratorsServiceProvider;
use Xethron\MigrationsGenerator\MigrationsGeneratorServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        date_default_timezone_set(config('server.timezone', 'Europe/Rome'));

        if (request()->segments(1) !== 'test') {
            Blade::include('index.footer', 'index_footer');
            Blade::include('index.head', 'index_head');
            Blade::include('manual.footer', 'manual_footer');
            Blade::include('layout.head', 'game_head');
            Blade::include('layout.header', 'game_header');
            Blade::include('layout.footer', 'game_footer');
            Blade::include('layout.menu', 'game_menu');
        }

        if (config('server.newsboxes.1')) {
            View::share('peace_type', [
                trans('installation/config.server_options.peace_type.none'),
                trans('installation/config.server_options.peace_type.normal'),
                trans('installation/config.server_options.peace_type.christmas'),
                trans('installation/config.server_options.peace_type.new_year'),
                trans('installation/config.server_options.peace_type.easter'),
                trans('installation/config.server_options.peace_type.maintenance')
            ]);
        }

        if (request()->segments(1) !== 'test') {
            view()->composer('*', function (\Illuminate\Contracts\View\View $view) {
                if (Auth::check()) {
                    $view->with('village', Auth::user()->selectedVillage->village);
                }
            });
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(TelescopeServiceProvider::class);
            $this->app->register(GeneratorsServiceProvider::class);
            $this->app->register(MigrationsGeneratorServiceProvider::class);
        }
    }
}
