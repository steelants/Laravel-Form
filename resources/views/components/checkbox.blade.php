@php
    $nameKey = $attributes->whereStartsWith('wire:model')->first() ?? $name ?? '';
@endphp

<div class="form-field {{ $groupClass }}">
    <label>
        <input
            @isset($id) id="{{ $id }}" @endisset
            {{ $attributes->class(['check', 'is-invalid' => $errors->has($nameKey)]) }}
            type="checkbox"
            @isset($name)
                name="{{ $name }}"
                value="{{ $value }}"
                @checked(old($name, $checked))
            @endisset
        >
        @if (!empty($label))
            <span
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
