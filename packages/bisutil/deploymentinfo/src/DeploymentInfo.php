<?php

namespace BisUtil\DeploymentInfo;

class DeploymentInfo
{
    /**
     * @return void
     */
    public function loadDeploymentInfo(): void {
        $path = base_path('.deployment-info.json');
        if (file_exists($path)) {
            $deploymentInfo = trim(file_get_contents($path));
            // Check if the file content is valid JSON
            json_decode($deploymentInfo);
            if (json_last_error() === JSON_ERROR_NONE) {
                $deploymentInfo = json_decode($deploymentInfo, true);
                $this->loadConfigsFromJson($deploymentInfo, '');
                if(!empty($deploymentInfo['CI_COMMIT_SHA'])) {
                    config(['app.deploymentinfo.version' => $deploymentInfo['CI_COMMIT_SHA']]);
                }
            } else {
                config(['app.deploymentinfo.version' => 'Version Error!']);
            }
        }
        else {
            config(['app.deploymentinfo.version' => 'Unversioned']);
        }
    }


    /**
     * Load the configuration values from a JSON array and create Laravel config values.
     *
     * @param array  $deploymentInfo   The array containing deployment information.
     * @param string $base             The base name for the config values.
     *                                 This will be used as a prefix in the Laravel config keys.
     *
     * @return void
     */
    protected function loadConfigsFromJson(array $deploymentInfo, string $base): void {
        // Loop through the resulting array and create Laravel config values
        foreach($deploymentInfo as $key => $value) {
            if(is_array($value)) {
                $this->loadConfigsFromJson($value, strtolower($key) . '.');
            } else {
                config(['app.deploymentinfo.' . $base . strtolower($key) => $value]);
            }
        }
    }
}
