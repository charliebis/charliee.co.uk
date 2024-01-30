<?php

namespace Bisutil\DeploymentInfo;

/**
 * Class DeploymentInfoLoader
 *
 * @package Bisutil\DeploymentInfo\Providers
 *
 * Represents information about a deployment.
 */
class DeploymentInfoLoader
{
    /**
     * @var string
     */
    protected string $status = '';
    /**
     * @var string
     */
    protected string $version = '';
    /**
     * @var string
     */
    protected string $error = '';
    /**
     * @var int
     */
    protected int $total = 0;
    /**
     * @var array
     */
    protected array $deploymentInfo = [];


    /**
     * Constructs a new instance of the class.
     *
     * This method loads the deployment information.
     *
     * @return void
     */
    public function __construct() {
        $this->loadDeploymentInfo();
    }


    /**
     * Loads the deployment information from the deploymentinfo.json file.
     *
     * This method reads the contents of the deploymentinfo.json file, parses it as JSON,
     * and sets the necessary properties based on the parsed data. If the file does not exist,
     * or if its contents are not valid JSON, the method sets appropriate error messages.
     *
     * @return void
     */
    public function loadDeploymentInfo(): void {
        $path = base_path(config('deployment-info.json_file_path'));
        if (file_exists($path)) {
            $deploymentInfo = trim(file_get_contents($path));
            $deploymentInfo = json_decode($deploymentInfo, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $this->deploymentInfo = $deploymentInfo;
                $totalConfigVars      = $this->countConfigs($deploymentInfo);
                $this->status         = 'success';
                $this->total          = $totalConfigVars;
            }
            else {
                $this->status = 'error';
                $this->total  = 0;
                $this->error  = 'Deployment info file does not contain valid JSON';
            }
        }
        else {
            $this->status = 'error';
            $this->total  = 0;
            $this->error  = 'Deployment info file does not exist';
        }
    }


    /**
     * Counts the number of configurations in the deployment information.
     *
     * This method recursively counts the number of configurations in the given deployment information array.
     *
     * @param array $deploymentInfo The deployment information array.
     *
     * @return int The number of configurations in the deployment information.
     */
    protected function countConfigs(array $deploymentInfo): int {

        $count = 0;
        foreach ($deploymentInfo as $element) {
            if (is_array($element)) {
                $count += $this->countConfigs($element);
            }
            else {
                $count++;
            }
        }

        return $count;
    }


    /**
     * Retrieves the status of the deployment info load-in.
     *
     * This method returns the status of the deployment info load-in.
     *
     * @return string The status of the deployment info load-in.
     */
    public function getStatus(): string {
        return $this->status;
    }


    /**
     * Retrieves the error message.
     *
     * This method returns the error message stored in the class.
     *
     * @return string
     */
    public function getError(): string {
        return $this->error;
    }


    /**
     * Retrieves the version of the software.
     *
     * This method returns the version of the software as a string value.
     *
     * @return string The version of the software.
     */
    public function getVersion(): string {
        return $this->version;
    }


    /**
     * Returns the total number of configs.
     *
     * @return int The total value.
     */
    public function getTotal(): int {
        return $this->total;
    }


    /**
     * Retrieves the deployment information.
     *
     * This method returns an array containing the deployment information.
     *
     * @return array The deployment information represented as an array.
     */
    public function getDeploymentInfo(): array {
        return $this->deploymentInfo;
    }


    /**
     * Retrieves the value from the deployment info by the given key.
     *
     * This method returns the value associated with the specified key from the deployment info.
     * The deployment info is a multidimensional array loaded previously.
     * The key can be a dot-separated string representing the path to the desired value.
     *
     * @param string $key The key representing the path to the desired value in the deployment info.
     *
     * @return mixed|null The value associated with the specified key, or null if the key does not exist.
     */
    public function getDeploymentInfoValueByKey(string $key): mixed {
        $keys = explode('.', $key);
        $deploymentInfo = $this->deploymentInfo;

        foreach ($keys as $segment) {
            if (!is_array($deploymentInfo) || !array_key_exists($segment, $deploymentInfo)) {
                return null;
            }

            $deploymentInfo = $deploymentInfo[$segment];
        }

        return $deploymentInfo;
    }
}
