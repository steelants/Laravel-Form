<?php

namespace SteelAnts\Form\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use SteelAnts\Form\Traits\FromNameKeyTrait;

class Checkbox extends Component
{
    use FromNameKeyTrait;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $name = null,
        public ?string $label = null,
        public mixed $value = 1,
        public bool $checked = false,
        public ?string $groupClass = null,
        public ?string $help = null,
    ) {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return 'form::components.checkbox';
    }
}
