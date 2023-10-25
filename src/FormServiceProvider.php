<?php

namespace SteelAnts\Form;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use SteelAnts\Form\View\Components\Form;
use SteelAnts\Form\View\Components\Input;
use SteelAnts\Form\View\Components\Button;
use SteelAnts\Form\View\Components\Submit;
use SteelAnts\Form\View\Components\Summernote;
use SteelAnts\Form\View\Components\Textarea;

class FormServiceProvider extends ServiceProvider
{

    public function boot()
    {
        Blade::component('form', Form::class);
        Blade::component('form-input', Input::class);
        Blade::component('form-button', Button::class);
        Blade::component('form-submit', Submit::class);
        Blade::component('form-textarea', Textarea::class);
        Blade::component('form-summernote', Summernote::class);

        $this->loadViewsFrom(__DIR__ . '/../resources/views/components', 'form');
        // $this->publishes([
        //     __DIR__ . '/../resources/views/livewire/' => resource_path('views/vendor/modal'),
        // ]);
    }

    public function register()
    {
    }
}
