<?php

namespace SteelAnts\Form\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use SteelAnts\Form\FromErrorKeyTrait;

class Select extends Component
{
    use FromErrorKeyTrait;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $name = null,
        public ?string $label = null,
        public array $options = [],
        public mixed $value = null,
        public ?string $groupClass = null,
        public ?string $help = null,
        public ?string $placeholder = null,
    ) {

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return 'form::components.select';
    }
}
