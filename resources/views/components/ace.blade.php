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

<div class="ace-container {{ $groupClass }} {{ $errors->has($wireModel) ? 'is-invalid' : '' }}">
    @if (!empty($label))
        <label class="form-label"
            @isset($id) for="{{ $id }}" id="{{ $id }}-label" @endisset
        >
            {{ $label }}
        </label>
    @endif

    <div wire:ignore class="ace-editor-wrap">
        <textarea
            @isset($id) id="{{ $id }}" @endisset
            {{ $attributes->class(['ace-textarea']) }}
            @isset($name)
                name="{{ $name }}"
            @endisset
        >{{ $wireModel ? (!is_array($this->{$variable}) ? $this->{$variable} : $this->{$variable}[$arrayKey]) : (isset($name) ? old($name, $value) : '')}}</textarea>

        <div id="{{ $key }}" class="ace-editor"></div>
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

@if($wireModel || is_subclass_of(static::class, \Livewire\Component::class))
    @script
        <script>
            loadAce(document.getElementById('{{$key}}'), $wire, @js($language), @js($theme));
        </script>
    @endscript
@else
    @push('scripts')
        <script type="module">
            loadAce(document.getElementById('{{$key}}'), null, @js($language), @js($theme));
        </script>
    @endpush
@endif

