# Form

Form wrapper component with automatic CSRF token and method spoofing.


## Attributes

| Attribute | Default | Description |
|---|---|---|
| `method` | - | HTTP method; converted to uppercase |
| `action` | - | Form action URL |


## Classic Form

```blade
<x-form::form method="DELETE" action="action-url">
    ...
</x-form::form>
```

The `_token` and `_method` inputs are inserted automatically based on the `method` attribute:

```html
<form enctype="multipart/form-data" action="action-url" method="POST">
    <input type="hidden" name="_token" value="xxxxxxxx" autocomplete="off">
    <input type="hidden" name="_method" value="DELETE">
    ...
</form>
```


## Livewire Form

```blade
<x-form::form wire:submit="save">
    ...
</x-form::form>
```

```html
<form wire:submit="save" enctype="multipart/form-data">
    ...
</form>
```


## Next Steps

Continue with:

- [Components Overview](../components.md)
- [Usage](../usage.md)
