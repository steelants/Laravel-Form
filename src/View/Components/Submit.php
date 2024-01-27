<?php

namespace SteelAnts\Form\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Submit extends Component
{

    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $text = null,
        public bool $confirmation = false,
        public string $class = ""
    ) {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('form::submit');
    }
}
