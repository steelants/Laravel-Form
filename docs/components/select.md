# Select

Select component with options array and placeholder.


## Attributes

| Attribute | Default | Description |
|---|---|---|
| `name` | - | Input name (required for classic forms) |
| `label` | - | Input label |
| `options` | `[]` | Array of options (`value => label`) |
| `value` | - | Selected value (classic forms) |
| `group-class` | - | Class of the wrapping element |
| `help` | - | Help text |
| `placeholder` | - | Hidden option without a value |
| `id` | UUID | Element id |

All other attributes are passed down to the `select` element.


## Examples

```blade
@php
    $options = [
        1 => 'one',
        2 => 'two',
        3 => 'three',
    ];
@endphp

<x-form::select wire:model="select" group-class="mb-3" label="Livewire Select" :options="$options" placeholder="Select value..." />

<x-form::select name="select" group-class="mb-3" label="Basic Select" value="2" :options="$options" placeholder="Select value..." />
```


## Next Steps

Continue with:

- [Components Overview](../components.md)
- [Usage](../usage.md)
