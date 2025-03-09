@php
    $nameKey = $attributes->whereStartsWith('wire:model')->first() ?? $name ?? '';

    $wireModel = $attributes->whereStartsWith('wire:model')->first();
    if ($wireModel){
        $propertyPath = explode(".", $wireModel);
        $variable = $propertyPath[0];
        if (count($propertyPath) > 1){
            $arrayKey = $propertyPath[1];
        }
    }
@endphp

<div class="quill-container {{ $groupClass }} {{ $errors->has($wireModel) ? 'is-invalid' : '' }}">
    @if (!empty($label))
        <label class="form-label"
            @isset($id) for="{{ $id }}" id="{{ $id }}-label" @endisset
        >
            {{ $label }}
        </label>
    @endif

    <div wire:ignore class="quill-editor-wrap">
        <textarea
            @isset($id) id="{{ $id }}" @endisset
            {{ $attributes->class(['quill-textarea']) }}
            @isset($name)
                name="{{ $name }}"
            @endisset
        >{{ $wireModel ? (!is_array($this->{$variable}) ? $this->{$variable} : $this->{$variable}[$arrayKey]) : (isset($name) ? old($name, $value) : '')}}</textarea>

        <div id="{{ $key }}" class="quill-editor {{$wireModel ? 'quill-livewire' : ''}}"></div>
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

@if($wireModel)
    @script
        <script>
            loadQuill(document.getElementById('{{$key}}'), $wire);
        </script>
    @endscript
@endif

