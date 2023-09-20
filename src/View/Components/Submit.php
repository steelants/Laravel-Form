<?php

namespace SteelAnts\Form\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Submit extends Component
{
    public string $text;
    /**
     * Create a new component instance.
     */
    public function __construct(
        string $text,
    ) {
       $this->text = $text;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('form::submit');
    }
}
