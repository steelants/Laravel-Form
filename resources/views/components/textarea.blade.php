

<div class="mb-3">
    @if (isset($label) && !empty($label))
        <label
            class="form-label"
            @if (isset($id) && !empty($id)) id="{{$value}}-label" @endif
        >{{ $label }}</label>
    @endif
    <textarea class="form-control @error($name) is-invalid @enderror"
        @if (isset($id) && !empty($id)) id="{{$id}}" @endif
        @if (isset($name) && !empty($name)) name="{{$name}}" @endif
        @if (isset($label) && !empty($label)) aria-label="{{$label}}" @endif
        @if (isset($required) && $required) required @endif
        @if (isset($livewireModel) && !empty($livewireModel)) wire:model={{$livewireModel}} @endif
    >@if (isset($value) && !empty($value)){{$value}} @endif </textarea>
    @if (isset($help) && !empty($help))
        <div class="form-text">{{$help}}</div>
    @endif
    @error($name)
        <div class="invalid-feedback" role="alert">{{ $message }}</div>
    @enderror
</div>
