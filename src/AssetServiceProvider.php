<?php

declare(strict_types=1);

namespace Assurdeal\ActionButtonSelector;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class AssetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('action-button-selector', __DIR__ . '/../dist/js/asset.js');
            Nova::style('action-button-selector', __DIR__ . '/../dist/css/asset.css');
        });
    }
}
