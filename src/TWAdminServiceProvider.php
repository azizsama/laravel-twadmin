<?php

namespace AzizSama\TWAdmin;

use Illuminate\Support\ServiceProvider;

class TWAdminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__."/Config/config.php", 'twadmin');
        $this->loadViewsFrom(__DIR__."/../resources/views", 'twadmin');
    }
}