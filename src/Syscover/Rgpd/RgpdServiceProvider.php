<?php namespace Syscover\Rgpd;

use Illuminate\Support\ServiceProvider;


class RgpdServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // publish rgpd translations files
        $this->publishes([
            __DIR__ . '/../../resources/lang/' => base_path('/resources/lang')
        ], 'lang');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}