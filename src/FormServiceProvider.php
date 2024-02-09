<?php

namespace SteelAnts\Form;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'form');

        Blade::componentNamespace('SteelAnts\Form\View\Components', 'form');
    }

    public function register()
    {
    }
}
