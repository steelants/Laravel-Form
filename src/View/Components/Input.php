<?php

namespace SteelAnts\Form\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $id = '',
        public string $label = "",
        public string $help = "",
        public string $value = "",
        public string $placeholder = "",
        public bool $required = false,
        public string $livewireModel = "",
        public string $type = "text",
        public string $groupClass = "",
        public string $class = "",
    ) {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('form::input');
    }
}
