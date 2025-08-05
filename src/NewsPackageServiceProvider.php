<?php 
namespace DMCode\NewsPackage;

use Illuminate\Support\ServiceProvider;

class NewsPackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/news.php', 'news');
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/news.php');

        $this->publishes([
            __DIR__.'/config/news.php' => config_path('news.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../resources/js/pages/' => resource_path('js/pages/'),
        ], 'laravel-assets');
    }
}
