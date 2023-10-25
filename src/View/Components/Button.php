<?php

namespace SteelAnts\Form\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    public string $id;
    public string $name;
    public string $text;
    public string $label = "";
    public string $class = "";
    public bool $confirmation = false;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $id,
        string $name,
        string $text,
        string $label = "",
        string $class = "",
        bool $confirmation = false,
    ) {
       $this->id = $id;
       $this->name = $name;
       $this->text = $text;
       $this->label = $label;
       $this->class  = $class;
       $this->confirmation  = $confirmation;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('form::button');
    }
}
