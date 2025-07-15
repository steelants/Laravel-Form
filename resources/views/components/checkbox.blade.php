@php
    $nameKey = $attributes->whereStartsWith('wire:model')->first() ?? $name ?? '';
@endphp

<div class="form-check {{ $groupClass }}">
    <label>
        <input
            @isset($id) id="{{ $id }}" @endisset
            {{ $attributes->class(['form-check-input', 'is-invalid' => $errors->has($nameKey)]) }}
            type="checkbox"
            @isset($name)
                name="{{ $name }}"
                value="{{ $value }}"
                @checked(old($name, $checked))
            @endisset
        >
        @if (!empty($label))
            <span class="form-check-label"
                @isset($id) id="{{ $id }}-label" @endisset
            >
                {{ $label }}
            </span>
        @endif
    </label>

    @error($nameKey)
        <div class="invalid-feedback" role="alert">{{ $message }}</div>
    @enderror

    @if (isset($help) && !empty($help))
        <div class="form-text">{{ $help }}</div>
    @endif
</div>
