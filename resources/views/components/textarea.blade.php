@php
    $nameKey = $attributes->whereStartsWith('wire:model')->first() ?? $name ?? '';
@endphp

<div class="{{ $groupClass }}">
    @if (!empty($label))
        <label class="form-label"
            @isset($id) for="{{ $id }}" id="{{ $id }}-label" @endisset
        >
            {{ $label }}
        </label>
    @endif

    <textarea
        @isset($id) id="{{ $id }}" @endisset
        {{ $attributes->class(['form-control', 'is-invalid' => $errors->has($nameKey)]) }}
        @isset($name)
            name="{{ $name }}"
        @endisset
    >{{ isset($name) ? old($name, $value) : ''}}</textarea>

    @error($nameKey)
        <div class="invalid-feedback" role="alert">{{ $message }}</div>
    @enderror

    @if (isset($help) && !empty($help))
        <div class="form-text">{{ $help }}</div>
    @endif
</div>
