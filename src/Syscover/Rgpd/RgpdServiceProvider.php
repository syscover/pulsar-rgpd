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

        // register config files
        $this->publishes([
            __DIR__ . '/../../config/pulsar-rgpd.php' => config_path('pulsar-rgpd.php'),
        ]);

        $this->loadViewsFrom(__DIR__ . '/../../resources/views/rgpd', 'rgpd');

        $this->publishes([
            __DIR__ . '/../../resources/views/rgpd' => resource_path('views/vendor/rgpd'),
        ]);
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