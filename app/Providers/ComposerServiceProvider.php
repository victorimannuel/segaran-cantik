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
                'main/dashboard', 'main/statistik', 'main/export-import', 'main/kegiatan', 'main/umkm',
                'penduduk/create', 'penduduk/edit', 'penduduk/read', 'penduduk/log',
                'kegiatan/create', 'kegiatan/edit', 'kegiatan/read',
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
