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

### Button
```
<x-form::button class="btn-primary" type="submit">submit</x-form::button>
```

## Notes
- Non-livewire elment require `name` attribute
- Livewire element require `wire:model*` attribute. 
- Values are inserted with `old()`
- All attributes are passed down to input/select/texarea element. 

## Summernote support
Include JS and CSS files from [Summernote github](https://github.com/summernote/summernote/)
