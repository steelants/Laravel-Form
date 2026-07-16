# Checkbox

Checkbox component.


## Attributes

| Attribute | Default | Description |
|---|---|---|
| `name` | - | Input name (required for classic forms) |
| `label` | - | Input label |
| `value` | `1` | Submitted value when checked |
| `checked` | `false` | Initial checked state (classic forms) |
| `group-class` | - | Class of the wrapping element |
| `help` | - | Help text |
| `id` | UUID | Element id |

All other attributes are passed down to the `input` element.


## Examples

```blade
<x-form::checkbox wire:model="active" label="Active" />

<x-form::checkbox name="active" label="Active" :checked="true" />
```


## Next Steps

Continue with:

- [Components Overview](../components.md)
- [Usage](../usage.md)
