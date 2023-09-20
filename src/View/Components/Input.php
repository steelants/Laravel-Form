<?php

namespace SteelAnts\Form\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public string $id;
    public string $name;
    public string $label = "";
    public string $value = "";
    public string $placeholder = "";
    public array $class = [];
    public bool $required = false;

    /**
     * Create a new component instance.
     */
    public function __construct(
        string $id,
        string $name,
        string $label = "",
        string $value = "",
        string $placeholder = "",
        array $class = [],
        bool $required = false,
    ) {
       $this->id = $id;
       $this->name = $name;
       $this->label = $label;
       $this->value = $value;
       $this->placeholder = $placeholder;
       $this->class  = $class;
       $this->required  = $required;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('form::input');
    }
}
