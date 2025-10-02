@php
    $nameKey = $attributes->whereStartsWith('wire:model')->first() ?? $name ?? '';

    $wireModel = $attributes->whereStartsWith('wire:model')->first();
    if ($wireModel){
        list($variable, $arrayKey) = explode('.', $wireModel, 2);
    }
@endphp

<div class="ace-container {{ $groupClass }} {{ $errors->has($wireModel) ? 'is-invalid' : '' }}">
    @if (!empty($label))
        <label class="form-label"
            @isset($id) for="{{ $id }}" id="{{ $id }}-label" @endisset
        >
            {{ $label }}
        </label>
    @endif

    <div
        wire:ignore
        class="ace-editor-wrap"
        @if($wireModel || is_subclass_of(static::class, \Livewire\Component::class))
            x-data="loadAce($wire, @js($language), @js($theme))"
        @else
            x-data="loadAce(null, @js($language), @js($theme))"
        @endif
    >
        <textarea
            @isset($id) id="{{ $id }}" @endisset
            {{ $attributes->class(['ace-textarea']) }}
            @isset($name)
                name="{{ $name }}"
            @endisset
            x-ref="textarea"
        >{{ $wireModel ? (!is_array($this->{$variable}) ? $this->{$variable} : Illuminate\Support\Arr::get($this->{$variable}, $arrayKey)) : (isset($name) ? old($name, $value) : '')}}</textarea>

        <div id="{{ $key }}" class="ace-editor" x-ref="editor"></div>
        <div class="ace-loading">
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

@assets
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.39.1/ace.js" integrity="sha512-tGc7XQXpQYGpFGmdQCEaYhGdJ8B64vyI9c8zdEO4vjYaWRCKYnLy+HkudtawJS3ttk/Pd7xrkRjK8ijcMMyauw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endassets
