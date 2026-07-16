# Ace

Code editor component based on the Ace editor.

The Ace editor must be available as a global `ace` object in your application.

For the required setup see:

[Installation documentation](../installation.md)


## Attributes

| Attribute | Default | Description |
|---|---|---|
| `name` | - | Input name (required for classic forms) |
| `label` | - | Input label |
| `value` | - | Initial content |
| `group-class` | - | Class of the wrapping element |
| `help` | - | Help text |
| `language` | `html` | Syntax highlighting mode (`ace/mode/<language>`) |
| `theme` | `terminal` | Editor theme (`ace/theme/<theme>`) |
| `id` | UUID | Element id |


## Examples

```blade
<x-form::ace wire:model="code" label="Template" language="html" />

<x-form::ace name="script" label="Script" language="javascript" theme="monokai" />
```


## Next Steps

Continue with:

- [Components Overview](../components.md)
- [Installation](../installation.md)
