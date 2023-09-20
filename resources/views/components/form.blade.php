<form
    method="{{ $method }}"
    @if(isset($livewireAction) && !empty($livewireAction))
        wire:submit.prevent="{{ $livewireAction }}"
    @else
        action="{{ $action }}"
    @endif
    class="row g-3"
>
    {{ $slot }}
</form>
