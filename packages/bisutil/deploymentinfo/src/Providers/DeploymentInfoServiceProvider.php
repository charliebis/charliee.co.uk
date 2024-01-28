<?php

namespace BisUtil\DeploymentInfo\Providers;

use BisUtil\DeploymentInfo\DeploymentInfo;
use BisUtil\DeploymentInfo\Facades\DeploymentInfoFacade;
use Illuminate\Support\ServiceProvider;

/**
 * Class DeploymentInfoServiceProvider
 * @package BisUtil\DeploymentInfo\Providers
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
        $this->app->singleton('DeploymentInfo', function ($app) {
            return new DeploymentInfo();
        });
    }

    /**
     * This method boots the service provider and registers DeploymentInfo facade
     *
     * @return void
     */
    public function boot(): void {
        // Register Facade
        class_alias(DeploymentInfoFacade::class, 'DeploymentInfo');
        $this->publishes([
            __DIR__.'/../config/deployment-info.php' => config_path('deployment-info.php'),
        ]);
    }
}
