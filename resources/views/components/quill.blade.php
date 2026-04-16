
@use('Illuminate\Support\Arr')
@php
    $wireModel = $attributes->whereStartsWith('wire:model')->first();

    if ($wireModel) {
        // Livewire mode: wire:model always uses dot notation
        [$variable, $arrayKey] = array_pad(explode('.', $wireModel, 2), 2, null);
        $nameKey = $wireModel;
    } else {
        // HTML mode: name attribute may use bracket notation (foo[1][2]), convert to dot notation
        $nameKey = preg_replace('/\[([^\]]*)\]/', '.$1', $name ?? '');
        $nameKey = rtrim($nameKey, '.');
    }
@endphp

<div class="quill-container {{ $groupClass }} {{ $errors->has($nameKey) ? 'is-invalid' : '' }}">
    @if (!empty($label))
        <label class="form-label"
            @isset($id) for="{{ $id }}" id="{{ $id }}-label" @endisset
        >
            {{ $label }}
        </label>
    @endif

    <div
        wire:ignore
        class="quill-editor-wrap"
        @if($wireModel || is_subclass_of(static::class, \Livewire\Component::class))
            x-data="loadQuill({ wire: $wire, mentions: @js($mentions), tags: @js($tags) })"
        @else
            x-data="loadQuill({ mentions: @js($mentions), tags: @js($tags) })"
        @endif
    >
        <textarea
            @isset($id) id="{{ $id }}" @endisset
            {{ $attributes->class(['quill-textarea']) }}
            @isset($name)
                name="{{ $name }}"
            @endisset
            x-ref="textarea"
        >{{ $wireModel ? (!is_array($this->{$variable}) ? $this->{$variable} : Arr::get($this->{$variable}, $arrayKey)) : (isset($name) ? old($nameKey, $value) : '')}}</textarea>

        <div id="{{ $key }}" class="quill-editor" x-ref="editor"></div>
        <div class="quill-loading">
            <div class="spinner-border text-secondary" role="status"></div>
        </div>
    </div>


    @error($nameKey)
        <div class="invalid-feedback d-block" role="alert">{{ $message }}</div>
    @enderror

    @if (isset($help) && !empty($help))
        <div class="form-text">{{ $help }}</div>
    @endif

</div>
