<?php

namespace SteelAnts\Form\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Submit extends Component
{
    public string $text;
    public string $class = "false";
    public bool $confirmation = false;


    /**
     * Create a new component instance.
     */
    public function __construct(
        string $text,
        bool $confirmation = false,
        string $class = ""
    ) {
       $this->text = $text;
       $this->confirmation = $confirmation;
       $this->class = $class;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('form::submit');
    }
}
