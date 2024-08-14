<?php

namespace BoredProgrammers\Wolt\Providers;

use Illuminate\Support\ServiceProvider;

class WoltServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../Config/wolt.php' => config_path('wolt.php'),
        ], 'wolt-config');
    }

}
