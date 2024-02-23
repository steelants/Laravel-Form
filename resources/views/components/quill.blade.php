<div wire:ignore class="quill-container {{ $groupClass }}">
    @if (!empty($label))
        <label class="form-label" 
            @isset($id) for="{{ $id }}" id="{{ $id }}-label" @endisset
        >
            {{ $label }} [{{$getNameKey()}}]
        </label>
    @endif

    <div class="quill-editor-wrap">
        <textarea 
            @isset($id) id="{{ $id }}" @endisset
            {{ $attributes->class(['quill-textarea','is-invalid' => $errors->has($getNameKey())]) }}
            @isset($name) 
                name="{{ $name }}" 
            @endisset
        >{{ $isLivewire() ? $this->{$getNameKey()} : (isset($name) ? old($name, $value) : '')}}</textarea>

        <div class="quill-editor {{$isLivewire() ? 'quill-livewire' : ''}}"></div>
        <div class="quill-loading">
            <div class="spinner-border text-secondary" role="status"></div>
        </div>
    </div>


    @error($getNameKey())
        <div class="invalid-feedback" role="alert">{{ $message }}</div>
    @enderror

    @if (isset($help) && !empty($help))
        <div class="form-text">{{ $help }}</div>
    @endif

    @if($isLivewire())
        @script
            <script>
                loadQuill();
            </script>
        @endscript
    @endif
</div>
