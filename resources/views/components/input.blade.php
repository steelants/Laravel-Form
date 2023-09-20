<div class="input-group mb-3">
    @if (isset($label) && !empty($label))
        <span
            class="input-group-text"
            @if (isset($id) && !empty($id)) id="{{$value}}-label" @endif
        >{{ $label }}</span>
    @endif
    <input
        aria-describedby="basic-addon1"
        class="form-control @error($name) is-invalid @enderror"
        type="text"
        @if (isset($id) && !empty($id)) id="{{$id}}" @endif
        @if (isset($name) && !empty($name)) name="{{$name}}" @endif
        @if (isset($label) && !empty($label)) aria-label="{{$label}}" @endif
        @if (isset($value) && !empty($value)) value="{{$value}}" @endif
        @if (isset($placeholder) && !empty($placeholder)) placeholder="{{$placeholder}}" @endif
        @if (isset($required) && $required) required @endif
        @if (isset($livewireModel) && !empty($livewireModel)) wire:model.debounce.500ms={{$livewireModel}} @endif
    >
    @error($name)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
