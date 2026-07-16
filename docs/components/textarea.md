# Textarea

Textarea component.


## Attributes

| Attribute | Default | Description |
|---|---|---|
| `name` | - | Input name (required for classic forms) |
| `label` | - | Input label |
| `value` | - | Input value (classic forms) |
| `group-class` | - | Class of the wrapping element |
| `help` | - | Help text |
| `id` | UUID | Element id |

All other attributes are passed down to the `textarea` element.


## Examples

```blade
<x-form::textarea wire:model="textarea" />

<x-form::textarea name="note" label="Note" rows="5" />
```


## Next Steps

Continue with:

- [Components Overview](../components.md)
- [Usage](../usage.md)
