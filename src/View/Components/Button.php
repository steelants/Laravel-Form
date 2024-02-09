<?php

namespace SteelAnts\Form\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{

    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $text = null,
        public ?string $id = null,
        public ?string $name = null,
        public ?string $confirm = null,
    ) {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('form::components.button');
    }
}
