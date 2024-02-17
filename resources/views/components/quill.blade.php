<div wire:ignore class="quill-container {{ $groupClass }}">
    @if (!empty($label))
        <label class="form-label" 
            @isset($id) for="{{ $id }}" id="{{ $id }}-label" @endisset
        >
            {{ $label }} [{{$getNameKey()}}]
        </label>
    @endif

    <div style="/*display: none;*/">
        <textarea 
            @isset($id) id="{{ $id }}" @endisset
            {{ $attributes->class(['quill-textarea','is-invalid' => $errors->has($getNameKey())]) }}
            @isset($name) 
                name="{{ $name }}" 
            @endisset
        >{{ isset($name) ? old($name, $value) : ''}}</textarea>
    </div>

    <div class="quill-editor">{{ isset($name) ? old($name, $value) : ''}}</div>

    @error($getNameKey())
        <div class="invalid-feedback" role="alert">{{ $message }}</div>
    @enderror

    @if (isset($help) && !empty($help))
        <div class="form-text">{{ $help }}</div>
    @endif

    <script>
        let quillE = new Quill('.quill-editor', {
            theme: 'snow'
        });

        document.querySelector('.quill-textarea').addEventListener("component.init", (event) => {
            console.log(event.target.value);
        });

        quillE.on('text-change', function () {
            let value = quillE.root.innerHTML;
            console.log(value);
            let textarea = quillE.root.closest('.quill-container').querySelector('.quill-textarea');
            textarea.value = value;
            textarea.dispatchEvent(new Event('input'));
        });
    </script>
</div>
