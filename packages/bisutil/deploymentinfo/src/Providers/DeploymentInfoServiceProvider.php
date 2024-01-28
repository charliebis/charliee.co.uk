<?php

namespace BisUtil\DeploymentInfo\Providers;

use BisUtil\DeploymentInfo\DeploymentInfo;
use Illuminate\Support\ServiceProvider;

class DeploymentInfoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @param DeploymentInfo $deploymentInfo
     *
     * @return void
     */
    public function boot(DeploymentInfo $deploymentInfo): void {
        $deploymentInfo->loadDeploymentInfo();
    }
}
