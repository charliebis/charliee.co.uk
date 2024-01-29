<?php

namespace Bisutil\DeploymentInfoLoader\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class DeploymentInfoFacade
 *
 * @package Bisutil\DeploymentInfoLoader\Facades
 * @see \Bisutil\DeploymentInfoLoader\DeploymentInfoServiceProvider
 * @method __construct()
 * @method void loadDeploymentInfo()
 * @method int countConfigs(array $deploymentInfo)
 * @method string getStatus()
 * @method string getError()
 * @method string getVersion()
 * @method int getTotal()
 * @method array getDeploymentInfo()
 * @method mixed getDeploymentInfoValueByKey(string $key)
 */
class DeploymentInfoFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string {
        // This should match the alias you will bind your service to in the service provider
        return \Bisutil\DeploymentInfoLoader\DeploymentInfoParser::class;
    }
}
