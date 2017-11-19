<?php

namespace Foodo\Providers;

use Collective\Html\HtmlServiceProvider;

class HtmlMacroProvider extends HtmlServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        parent::register();
        require base_path().'/app/macros.php';
    }
}
