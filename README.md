<div align="center">

<a href="https://steelants.cz">
	<picture>
		<source
			media="(prefers-color-scheme: dark)"
			srcset="https://steelants.cz/wp-content/uploads/2026/07/white_3.png">
		<img
			src="https://steelants.cz/wp-content/themes/wp_steelants_v5/img/logo.png"
			alt="SteelAnts"
			width="180">
	</picture>
</a>

<h1>Laravel-Form</h1>

[![Latest Version on Packagist](https://img.shields.io/packagist/v/steelants/form.svg?style=flat-square)](https://packagist.org/packages/steelants/form) [![Total Downloads](https://img.shields.io/packagist/dt/steelants/form.svg?style=flat-square)](https://packagist.org/packages/steelants/form)

<p>
Livewire compatible form elements for Laravel styled with Bootstrap 5.
</p>

<p>
Created by <a href="https://steelants.cz">SteelAnts s.r.o.</a>
</p>

</div>

## Installation

Install the package using Composer:

```bash
composer require steelants/form
```

## Features

SteelAnts Laravel-Form provides:

- Form wrapper with CSRF and method spoofing
- Text input with datalist support
- Select
- Textarea
- Checkbox
- Quill rich text editor
- Ace code editor
- Phone input with country codes
- Price input with VAT modes
- Button with confirmation
- Livewire and classic form support

## Usage

Components are used with the `form::` namespace:

```blade
<x-form::form wire:submit="save">
    <x-form::input wire:model="name" label="Name" />
    <x-form::button class="btn-primary" type="submit">Save</x-form::button>
</x-form::form>
```

## Documentation

- [Installation](docs/installation.md)
- [Usage](docs/usage.md)
- [Components](docs/components.md)
- [Development](docs/development.md)

## Contributors

<a href="https://github.com/steelants/Laravel-Form/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=steelants/Laravel-Form" />
</a>

## Other Packages

- [laravel-auth](https://github.com/steelants/laravel-auth)
- [Livewire-DataTable](https://github.com/steelants/Livewire-DataTable)
- [Laravel-Boilerplate.Warehouse](https://github.com/steelants/Laravel-Boilerplate.Warehouse)
- [Laravel-Boilerplate](https://github.com/steelants/Laravel-Boilerplate)
- [Livewire-Form](https://github.com/steelants/Livewire-Form)
- [Laravel-General](https://github.com/steelants/Laravel-General)
- [Laravel-Tenant](https://github.com/steelants/Laravel-Tenant)
- [Livewire-Modal](https://github.com/steelants/Livewire-Modal)

## License

This package is open-sourced software licensed under the [MIT license](LICENSE).
