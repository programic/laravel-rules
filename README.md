# Programic - Laravel Rules

[![Latest Version on Packagist](https://img.shields.io/packagist/v/programic/laravel-rules.svg?style=flat-square)](https://packagist.org/packages/programic/laravel-rules)
![](https://github.com/programic/laravel-rules/workflows/Run%20Tests/badge.svg?branch=master)
[![Tests](https://github.com/programic/laravel-rules/actions/workflows/run-tests.yml/badge.svg?branch=master)](https://github.com/programic/laravel-task/actions/workflows/rules.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/programic/laravel-rules.svg?style=flat-square)](https://packagist.org/packages/programic/laravel-rules)

This package allows you to manage request validation rules for store and update requests

### Installation
This package requires PHP 7.2 and Laravel 5.8 or higher.

```
composer require programic/laravel-rules
```

### Basic Usage
```bash
# Create Task
php artisan make:rule SaveUserRule
```

### Conditions
```php
public funtion base(): array
{
    return [
        'name': 'required,string',
        'company': 'required,integer',
    ];  
}

public funtion store(): array
{
    return [
        'company': 'exists:companies.id',
    ];
}

public funtion update(): array
{
    return [
        'name': 'nullable',
    ]
}
```

### Custom stub
Custom stubs are supported.
```bash
php artisan vendor:publish --provider="Programic\Rules\RulesServiceProvider" --tag="stubs"
```

### Testing
```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security-related issues, please email [info@programic.com](mailto:info@programic.com) instead of using the issue tracker.

## Credits

- [Rick Bongers](https://github.com/rbongers)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
