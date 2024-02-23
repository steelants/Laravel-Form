# Laravel Form

Livewire compatible form elements. Styled with Bootstrap 5.

## Currently WIP

### Created by: [SteelAnts s.r.o.](https://www.steelants.cz/)

[![Total Downloads](https://img.shields.io/packagist/dt/steelants/form.svg?style=flat-square)](https://packagist.org/packages/steelants/form)


## Examples

### Form
Attributes:
- action
- method
```blade
<x-form::form method="DELETE" action="action-url">
    ...
</x-form::form>    

<x-form::form wire:submit="save">
    ...
</x-form::form>   
```
Automatically inserts _method and _token base on method attribute
```html
<form enctype="multipart/form-data" action="action-url" method="POST">
    <input type="hidden" name="_token" value="xxxxxxxx" autocomplete="off">    
    <input type="hidden" name="_method" value="DELETE">
    ...
</form>

<form wire:submit="save" enctype="multipart/form-data">
    ...
</form>
```

### Input
Attributes:
- name - Input name (required for non-livewire use)
- label - Input label (optional) 
- help - Help text
- group-class - Class of wrapping element
```blade
<x-form::input group-class="mb-3" type="text" name="test" id="xxxx" label="Basic input" placeholder="This is placeholder" help="Help text is here"/>

<x-form::input type="text" wire:model="test" label="Livewire input"/>
```

### Select
Attributes:
- name - Input name (required for non-livewire use)
- label - Input label (optional) 
- help - Help text
- group-class - Class of wrapping element
- options - Array of values
- value - Selected value (for non-livewire use)
- placeholder - Placeholder (hidden option withou value)
```blade
@php
    $options = [
        1 => 'one',
        2 => 'two',
        3 => 'three',
    ];
@endphp

<x-form::select wire:model="select" group-class="mb-3" label="Livewire Select" :options="$options" placeholder="Select value..."/>

<x-form::select name="select" group-class="mb-3" label="Basic Select" value="2" :options="$options" placeholder="Select value..."/>

```

### Textarea
Attributes:
- name - Input name (required for non-livewire use)
- label - Input label (optional) 
- help - Help text
- group-class - Class of wrapping element
```blade
<x-form::textarea wire:model="textarea"/>
```

### Quill
```
<x-form::quill
    group-class="mb-3"
    label="Quill"
    name="quill"
    value="This is init value from html"
/>
<x-form::quill 
    group-class="mb-3"
    label="Quill" 
    wire:model="quill" 
/>
```

### Button
```
<x-form::button class="btn-primary" type="submit">submit</x-form::button>
```

## Notes
- Non-livewire elment require `name` attribute
- Livewire element require `wire:model*` attribute. 
- Values are inserted with `old()`
- All attributes are passed down to input/select/texarea element. 

## Quill editor requirements
Include following JS and CSS
```html
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.js"></script>
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.2/dist/quill.snow.css" rel="stylesheet">
```

```css
.quill-editor-wrap{
    position: relative;
    min-height: 9rem;
    display: flex;
    flex-direction: column;
}

.quill-editor-wrap textarea{
    display: none;
}

.quill-editor{
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.quill-editor .ql-editor{
    flex-grow: 1;
}

.quill-loading{
    position: absolute;
    z-index: 10;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    align-items: center;
    justify-content: center;
    display: flex;
    border-radius: var(--bs-border-radius);
    border: var(--bs-border-width) solid var(--bs-border-color);
}

.quill-editor.ready + .quill-loading{
    display: none;
}
```

```js
window.loadQuill = function(){
    document.querySelectorAll('.quill-editor:not(.ready)').forEach(function(element){
        let textarea = element.closest('.quill-container').querySelector('.quill-textarea');

        let quill = new Quill(element, {
            theme: 'snow'
        });

        quill.root.innerHTML = textarea.value;

        quill.on('text-change', function () {
            let value = quill.root.innerHTML;
            textarea.value = value;
            textarea.dispatchEvent(new Event('input'));
        });

        element.classList.add('ready');
        element.closest('.quill-container').querySelector('.quill-loading').remove();
    });
}
window.loadQuill();
```

## Summernote support (deprecated, use quill)
Include JS and CSS files from [Summernote github](https://github.com/summernote/summernote/)
