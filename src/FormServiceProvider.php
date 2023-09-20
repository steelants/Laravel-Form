<?php

namespace SteelAnts\Form;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use SteelAnts\Form\View\Components\Button;
use SteelAnts\Form\View\Components\Form;
use SteelAnts\Form\View\Components\Input;
use SteelAnts\Form\View\Components\Submit;

class FormServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Blade::component('form', Form::class);
        Blade::component('form-input', Input::class);
        Blade::component('form-button', Button::class);
        Blade::component('form-submit', Submit::class);


        $this->loadViewsFrom(__DIR__ . '/../resources/views/components', 'form');
        // $this->publishes([
        //     __DIR__ . '/../resources/views/livewire/' => resource_path('views/vendor/modal'),
        // ]);
    }

    public function register()
    {
    }
}
