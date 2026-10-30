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

    @if ($strength && $type == 'password')
        {{-- Bootstrap initializes [data-bs-strength] only on page load, Alpine covers inputs rendered later by Livewire --}}
        <div wire:ignore x-data x-init="bootstrap.Strength.getOrCreateInstance($el.firstElementChild)">
            <div class="strength" data-bs-strength data-bs-input="#{{ $id }}">
                <div class="strength-segment"></div>
                <div class="strength-segment"></div>
                <div class="strength-segment"></div>
                <div class="strength-segment"></div>
            </div>
            <span class="strength-text"></span>
        </div>
    @endif

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
