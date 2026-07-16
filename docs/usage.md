# Usage

SteelAnts Laravel-Form provides Blade components under the `form::` namespace.

All components work in Livewire components and in classic HTML forms.


## Livewire Forms

Livewire elements are bound using `wire:model`:

```blade
<x-form::form wire:submit="save">
    <x-form::input wire:model="name" label="Name" />
    <x-form::select wire:model="role" label="Role" :options="$roles" />
    <x-form::button class="btn-primary" type="submit">Save</x-form::button>
</x-form::form>
```


## Classic Forms

Classic elements require the `name` attribute:

```blade
<x-form::form method="POST" action="{{ route('users.store') }}">
    <x-form::input name="name" label="Name" />
    <x-form::button class="btn-primary" type="submit">Save</x-form::button>
</x-form::form>
```

Values are inserted using `old()` after a validation redirect.


## Shared Attributes

Most components support the following attributes:

| Attribute | Description |
|---|---|
| `name` | Input name (required for classic forms) |
| `label` | Input label |
| `value` | Input value (classic forms) |
| `help` | Help text displayed under the input |
| `group-class` | Class of the wrapping element |
| `id` | Element id; a UUID is generated when omitted |

All other attributes are passed down to the underlying `input`, `select` or `textarea` element.

This includes `placeholder`, `class`, `disabled`, `required` and all `wire:*` attributes.


## Next Steps

Continue with:

- [Installation](installation.md)
- [Components](components.md)
