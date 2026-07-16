# Installation

SteelAnts Laravel-Form is installed using Composer.


## Requirements

- Laravel 11 or 12
- Livewire 2 or 3
- Alpine.js
- Bootstrap 5 styling in your application


## Install the Package

Install the package using Composer:

```bash
composer require steelants/form
```

Laravel automatically discovers the service provider.

The components are available immediately under the `form::` namespace.

Currently the package does not require additional configuration files.


## Quill Editor Setup

The [Quill component](components/quill.md) requires additional JavaScript dependencies:

```bash
npm i quill quill-table-ui quill-mention quill-magic-url
```

Copy the Quill scripts and styles from the package stubs into your resources:

- `stubs/resources/js/quill.js` -> `resources/js/quill.js`
- `stubs/resources/sass/_quill.scss` -> `resources/sass/_quill.scss`

Import the script in `resources/js/app.js`:

```js
import './quill';
```

Import the styles in `resources/sass/app.scss`:

```scss
@import "./quill";
```


## Ace Editor Setup

The [Ace component](components/ace.md) requires the Ace editor to be available as a global `ace` object.

Copy the Ace script and styles from the package stubs into your resources:

- `stubs/resources/js/ace.js` -> `resources/js/ace.js`
- `stubs/resources/sass/_ace.scss` -> `resources/sass/_ace.scss`

Import them the same way as the Quill assets.


## Next Steps

Continue with:

- [Usage](usage.md)
- [Components](components.md)
