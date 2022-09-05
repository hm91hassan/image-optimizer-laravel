<?php

namespace Luova\ImageOptimizer;

use Illuminate\Support\ServiceProvider;

class ImageOptimizerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // if (file_exists($file =  __DIR__ . '/Helpers/helpers.php')) {
        //     require $file;
        // }

        // $this->publishes([
        //     __DIR__ . '/Config/image-optimizer.php' => config_path('image-optimizer.php')
        // ]);
    }
}