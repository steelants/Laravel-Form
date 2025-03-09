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

    <select
        @isset($id) id="{{ $id }}" @endisset
        {{ $attributes->class(['form-select', 'is-invalid' => $errors->has($nameKey)]) }}
        @isset($name)
            name="{{ $name }}"
        @endisset
    >
        @if (!empty($placeholder))
            <option value="" hidden>{{ $placeholder }}</option>
        @endif

        @foreach ($options as $val => $opt)
            <option value="{{ $val }}" @if(isset($name) && old($name, $value) == $val) selected @endif>{{ $opt }}</option>
        @endforeach
    </select>

    @error($nameKey)
        <div class="invalid-feedback" role="alert">{{ $message }}</div>
    @enderror

    @if (isset($help) && !empty($help))
        <div class="form-text">{{ $help }}</div>
    @endif
</div>
