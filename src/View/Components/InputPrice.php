<?php

namespace SteelAnts\Form\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class InputPrice extends Component
{
    public string $step = '';

    /**
     * Create a new component instance.
     */
    public function __construct(
        public $name = null,
        public $label = null,
        public mixed $value = null,
        public $groupClass = null,
        public $help = null,
        public $id = null,
        public int $vat = 21,
        public string $currency = 'Kč',
        public int $decimals = 6,
        public string $mode = 'with',
    ) {
        $this->id ??= Str::uuid();

        if ($decimals) {
            $this->step = '.' . str_repeat('0', $decimals - 1) . '1';
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return 'form::components.input-price';
    }
}
