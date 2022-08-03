<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;


class ComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Using class based composers...
        View::composer(
            [
                'main/dashboard', 'main/statistik', 'main/export-import',
                'penduduk/create', 'penduduk/edit', 'penduduk/readonly'
            ],
            'App\Http\ViewComposers\PendudukComposer'
        );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }
}
