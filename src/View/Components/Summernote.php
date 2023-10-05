<?php

namespace SteelAnts\Form\View\Components;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Summernote extends Component
{

    public function __construct(
        public string $id = '',
        public string $name = '',
        public string $value = '',
        public int $height = 100,
        public array $mentions = [],
        public string $livewireModel = "",
    ) {
        if(empty($this->id)){
            $this->id = 'summernote-'.Str::random(10);
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('form::summernote');
    }
}
