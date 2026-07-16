# Input Price

Price input component with VAT and currency support.


## Attributes

| Attribute | Default | Description |
|---|---|---|
| `name` | - | Input name (required for classic forms) |
| `label` | - | Input label |
| `value` | - | Input value (classic forms) |
| `group-class` | - | Class of the wrapping element |
| `help` | - | Help text |
| `vat` | `21` | VAT rate in percent |
| `currency` | `Kč` | Displayed currency |
| `decimals` | `2` | Display precision |
| `real-decimals` | `6` | Storage precision (controls the input `step`) |
| `mode` | `with` | VAT mode |
| `id` | UUID | Element id |


## Examples

```blade
<x-form::input-price wire:model="price" label="Price" />

<x-form::input-price name="price" label="Price" :vat="15" currency="EUR" />
```


## Next Steps

Continue with:

- [Components Overview](../components.md)
- [Usage](../usage.md)
