<?php

namespace Bisutil\DeploymentInfoLoader\Providers;

use Bisutil\DeploymentInfoLoader\DeploymentInfoParser;
use Bisutil\DeploymentInfoLoader\Facades\DeploymentInfoFacade;
use Illuminate\Support\ServiceProvider;

/**
 * Class DeploymentInfoServiceProvider
 * @package Bisutil\DeploymentInfoLoader\Providers
 *
 * This class provides the DeploymentInfo service
 */
class DeploymentInfoServiceProvider extends ServiceProvider
{
    /**
     * This method registers the DeploymentInfo service
     *
     * @return void
     */
    public function register(): void {
        $this->mergeConfigFrom(__DIR__.'/../config/deployment-info.php', 'deployment-info');
        $this->app->singleton('DeploymentInfoFacade', function ($app) {
            return new DeploymentInfoParser();
        });
    }

    /**
     * This method boots the service provider and registers DeploymentInfo facade
     *
     * @return void
     */
    public function boot(): void {
        // Register Facade
        $this->publishes([
            __DIR__.'/../config/deployment-info.php' => config_path('deployment-info.php'),
        ]);
    }
}
