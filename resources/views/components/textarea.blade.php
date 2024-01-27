

<div class="{{ $groupClass }}">
    @if (isset($label) && !empty($label))
        <label
            class="form-label"
            @if (isset($id) && !empty($id)) for="{{$id}}" id="{{$id}}-label" @endif
        >{{ $label }}</label>
    @endif
    <textarea class="form-control @error($name) is-invalid @enderror {{ $class }}"
        {{ $attributes }}
        @if (isset($id) && !empty($id)) id="{{$id}}" @endif
        @if (isset($name) && !empty($name)) name="{{$name}}" @endif
        @if (isset($label) && !empty($label)) aria-label="{{$label}}" @endif
        @if (isset($required) && $required) required @endif
        @if (isset($livewireModel) && !empty($livewireModel)) wire:model={{$livewireModel}} @endif
    >
        {{$value ?? ''}}
    </textarea>
    
    @error($name)
        <div class="invalid-feedback" role="alert">{{ $message }}</div>
    @enderror

    @if (isset($help) && !empty($help))
        <div class="form-text">{{$help}}</div>
    @endif
</div>
