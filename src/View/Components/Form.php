<?php

namespace SteelAnts\Form\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form extends Component
{
    public string $action = "#";
    public string $livewireAction = "";
    public string $method = "GET";

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $action = "#",
        string $livewireAction = "",
        string $method = "GET",

    ) {
        $this->action = $action;
        $this->livewireAction = $livewireAction;
        $this->method = $method;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('form::form');
    }
}
