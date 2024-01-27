<form
    method="{{ $method }}"
    @if(!empty($livewireAction))
        wire:submit.prevent="{{ $livewireAction }}"
    @else
        action="{{ $action }}"
    @endif
>
    {{ $slot }}
</form>
