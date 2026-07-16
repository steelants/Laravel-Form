# Phone

Phone input component with country code preselections.


## Attributes

| Attribute | Default | Description |
|---|---|---|
| `name` | - | Input name (required for classic forms) |
| `label` | - | Input label |
| `value` | - | Input value (classic forms) |
| `group-class` | - | Class of the wrapping element |
| `help` | - | Help text |
| `preselections` | `['+420', '+421']` | Offered country codes |
| `id` | UUID | Element id |


## Examples

```blade
<x-form::phone wire:model="phone" label="Phone" />

<x-form::phone name="phone" label="Phone" :preselections="['+420', '+421', '+48']" />
```


## Next Steps

Continue with:

- [Components Overview](../components.md)
- [Usage](../usage.md)
