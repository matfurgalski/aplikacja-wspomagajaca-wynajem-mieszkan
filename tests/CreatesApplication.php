<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        
        $app = require __DIR__.'/../bootstrap/app.php';
       
        $app->make(Kernel::class)->bootstrap();
        $app['config']->set('database.default','dusk_testing');

        return $app;
    }
}
