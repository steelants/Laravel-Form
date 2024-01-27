<div class="{{ $groupClass }}">
    @if (isset($label) && !empty($label))
        <label
            class="form-label"
            @if (isset($id) && !empty($id)) for="{{$id}}" id="{{$id}}-label" @endif
        >
            {{ $label }}
        </label>
    @endif
    <input
        class="form-control @error($name) is-invalid @enderror {{ $class }}"
        @if (!empty($id)) id="{{$id}}" @endif
        @if (!empty($name)) name="{{$name}}" @endif
        @if (!empty($label)) aria-label="{{$label}}" @endif
        @if (!empty($value)) value="{{$value}}" @endif
        @if (!empty($placeholder)) placeholder="{{$placeholder}}" @endif
        @if ($required) required @endif
        @if (isset($livewireModel) && !empty($livewireModel)) wire:model={{$livewireModel}} @endif
    >
    
    @error($name)
        <div class="invalid-feedback" role="alert">{{ $message }}</div>
    @enderror

    @if (isset($help) && !empty($help))
        <div class="form-text">{{$help}}</div>
    @endif
</div>
