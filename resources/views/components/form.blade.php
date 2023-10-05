<form
    method="{{ $method }}"
    @if(isset($livewireAction) && !empty($livewireAction))
        wire:submit.prevent="{{ $livewireAction }}"
    @else
        action="{{ $action }}"
    @endif
>
    {{ $slot }}
</form>
