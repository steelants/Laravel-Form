# Development

This guide describes how to develop SteelAnts Laravel-Form locally inside a Laravel application.


## Local Setup

Create a packages directory and clone the repository:

```bash
mkdir packages
git clone https://github.com/steelants/Laravel-Form.git ./packages/Laravel-Form
```

Update the autoload section of your application `composer.json`:

```json
"autoload": {
    "psr-4": {
        "SteelAnts\\Form\\": "packages/Laravel-Form/src/"
    }
}
```

Refresh the autoloader:

```bash
composer dump-autoload
```

Register the service provider in `bootstrap/providers.php`:

```php
return [
    // ...
    SteelAnts\Form\FormServiceProvider::class,
];
```


## Development Workflow

1. Create a feature branch.
2. Implement changes.
3. Verify the components in a test application.
4. Merge changes into the development branch.


## Next Steps

Continue with:

- [Usage](usage.md)
- [Components](components.md)
