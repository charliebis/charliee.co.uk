<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DeploymentInfoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void {
        //
    }


    /**
     * Bootstrap services.
     */
    public function boot(): void {
        $path = base_path('.deployment-info');
        if (file_exists($path)) {
            $deploymentInfo = trim(file_get_contents($path));
            // Check if the file content is valid JSON
            json_decode($deploymentInfo);
            if (json_last_error() === JSON_ERROR_NONE) {
                $deploymentInfo = json_decode($deploymentInfo, true);
                // Loop through the resulting array and create Laravel config values
                foreach($deploymentInfo as $key => $value) {
                    config(['app.deploymentinfo.' . strtolower($key) => $value]);
                }
                if(!empty($deploymentInfo['CI_COMMIT_SHA'])) {
                    config(['app.deploymentinfo.version' => $deploymentInfo['CI_COMMIT_SHA']]);
                }
            }
        }
        else {
            config(['app.deploymentinfo.version' => 'Unversioned']);
        }
    }
}
