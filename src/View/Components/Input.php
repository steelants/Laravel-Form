<?php

namespace SteelAnts\Form\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Exception;
use Livewire\Attributes\Locked;
use Illuminate\Support\Str;

class Input extends Component
{
    #[Locked]
    public $key;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $type = 'text',
        public ?string $name = null,
        public ?string $label = null,
        public mixed $value = null,
        public ?string $groupClass = null,
        public ?string $help = null,
        public ?array $datalist = null,
    ) {
        if($type == 'checkbox') throw new Exception('Invalid input type');

        $this->key = 'input-'.Str::random();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return 'form::components.input';
    }
}
