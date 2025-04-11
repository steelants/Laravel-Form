@php
    $nameKey = $attributes->whereStartsWith('wire:model')->first() ?? ($name ?? '');
@endphp

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
        {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($nameKey), 'form-control-color' => $type == 'color']) }}
        @isset($name)
            name="{{ $name }}"
            value="{{ old($name, $value) }}"
        @endisset
        @if (!empty($datalist)) list="{{ $key }}-datalist" @endif
    >

    @if (!empty($datalist))
        <datalist id="{{ $key }}-datalist">
            @foreach ($datalist as $val)
                <option value="{{ $val }}"></option>
            @endforeach
        </datalist>
    @endif

    @error($nameKey)
        <div class="invalid-feedback" role="alert">{{ $message }}</div>
    @enderror

    @if (isset($help) && !empty($help))
        <div class="form-text">{{ $help }}</div>
    @endif
</div>
