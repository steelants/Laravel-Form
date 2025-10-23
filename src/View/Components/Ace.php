<?php

namespace SteelAnts\Form\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Locked;

class Ace extends Component
{
    #[Locked]
    public $key;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $name = null,
        public ?string $label = null,
        public mixed $value = null,
        public ?string $groupClass = null,
        public ?string $help = null,
        public string $language = 'html',
        public ?string $theme = 'terminal',
        public ?string $id = null,
    ) {
        $this->key = 'ace-'.Str::random();
        $this->id ??= Str::uuid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return function (array $data) {
            $attributes = $data['attributes'];

            $data['nameKey'] = $data['attributes']->whereStartsWith('wire:model')->first() ?? $name ?? '';

            $data['wireModel'] = $data['attributes']->whereStartsWith('wire:model')->first();
            if ($data['wireModel']){
                list($data['variable'], $data['arrayKey']) = array_pad(explode('.', $data['wireModel'], 2), 2, null);
            }
            return view('form::components.ace', $data)->render();
        };
    }
}
