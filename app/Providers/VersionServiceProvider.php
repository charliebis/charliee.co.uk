<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class VersionServiceProvider extends ServiceProvider
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
        $path = base_path('.version');
        if (file_exists($path)) {
            $version = trim(file_get_contents($path));
            config(['app.version' => $version]);
        }
        else {
            config(['app.version' => 'Unversioned']);
        }
    }
}
