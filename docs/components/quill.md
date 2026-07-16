# Quill

Rich text editor component based on Quill with tables, mentions and hashtags.

For the required JavaScript setup see:

[Installation documentation](../installation.md)


## Attributes

| Attribute | Default | Description |
|---|---|---|
| `name` | - | Input name (required for classic forms) |
| `label` | - | Input label |
| `value` | - | Initial HTML value (classic forms) |
| `group-class` | - | Class of the wrapping element |
| `help` | - | Help text |
| `mentions` | `[]` | Users for `@` mentions (see quill-mention) |
| `tags` | `[]` | Hashtags for `#` (see quill-mention) |
| `id` | UUID | Element id |


## Examples

```blade
<x-form::quill
    group-class="mb-3"
    label="Quill"
    name="quill"
    value="This is init value from html"
    :mentions="[['id' => 1, 'value' => 'SteelAnts']]"
    :tags="[['id' => 1, 'value' => 'Laravel']]"
/>

<x-form::quill
    group-class="mb-3"
    label="Quill"
    wire:model="quill"
/>
```


## Editor Features

The bundled editor configuration includes:

- Headers, bold, italic, underline, strike
- Blockquote and code block
- Links and images
- Ordered, bullet and check lists
- Tables (quill-table-ui)
- Automatic link detection (quill-magic-url)
- Mentions and hashtags (quill-mention)


## Next Steps

Continue with:

- [Components Overview](../components.md)
- [Installation](../installation.md)
