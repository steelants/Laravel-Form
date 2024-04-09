<div class="{{ $groupClass }}">
    @if (!empty($label))
        <label class="form-label" 
            @isset($id) for="{{ $id }}" id="{{ $id }}-label" @endisset
        >
            {{ $label }}
        </label>
    @endif

    <input 
        type="{{ $type }}" 
        @isset($id) id="{{ $id }}" @endisset
        {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($getNameKey())]) }}
        @isset($name) 
            name="{{ $name }}" 
            value="{{ old($name, $value) }}"
        @endisset
    >

    @error($getNameKey())
        <div class="invalid-feedback" role="alert">{{ $message }}</div>
    @enderror

    @if (isset($help) && !empty($help))
        <div class="form-text">{{ $help }}</div>
    @endif
</div>
