<?php

namespace horstoeko\zugferdlaravel;

use Illuminate\Support\ServiceProvider;

class ZugferdLaravelServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('zugferdlaravel', ZugferdLaravel::class);
    }
}
