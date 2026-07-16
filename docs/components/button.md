# Button

Button component with optional confirmation dialog.


## Attributes

| Attribute | Default | Description |
|---|---|---|
| `text` | - | Button label (alternative to slot content) |
| `name` | - | Button name |
| `confirm` | - | Confirmation message shown before the action |
| `id` | - | Element id |

All other attributes are passed down to the `button` element.


## Examples

```blade
<x-form::button class="btn-primary" type="submit">submit</x-form::button>

<x-form::button class="btn-danger" wire:click="remove({{ $id }})" confirm="Are you sure?">Delete</x-form::button>
```


## Next Steps

Continue with:

- [Components Overview](../components.md)
- [Usage](../usage.md)
