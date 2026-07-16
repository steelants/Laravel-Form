# Input

Text input component with datalist support.


## Attributes

| Attribute | Default | Description |
|---|---|---|
| `type` | `text` | Input type |
| `name` | - | Input name (required for classic forms) |
| `label` | - | Input label |
| `value` | - | Input value (classic forms) |
| `group-class` | - | Class of the wrapping element |
| `help` | - | Help text |
| `datalist` | - | Array of datalist suggestions |
| `id` | UUID | Element id |

All other attributes are passed down to the `input` element.

> The `checkbox` type is not supported and throws an exception.
> Use the [Checkbox component](checkbox.md) instead.


## Classic Input

```blade
<x-form::input group-class="mb-3" type="text" name="test" label="Basic input" placeholder="This is placeholder" help="Help text is here" />
```


## Livewire Input

```blade
<x-form::input type="text" wire:model="test" label="Livewire input" />
```


## Datalist

```blade
<x-form::input name="city" label="City" :datalist="['Prague', 'Brno', 'Ostrava']" />
```


## Next Steps

Continue with:

- [Components Overview](../components.md)
- [Usage](../usage.md)
