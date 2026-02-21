<?php

namespace SteelAnts\Form\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;

class Phone extends Component
{
    public function __construct(
        public $name = null,
        public $label = null,
        public mixed $value = null,
        public $groupClass = null,
        public $help = null,
        public $id = null,
        public ?array $preselections = ['+420', '+421'],
    ) {
        $this->id ??= Str::uuid();
    }

    public function render(): View|Closure|string
    {
        return 'form::components.phone';
    }
}
