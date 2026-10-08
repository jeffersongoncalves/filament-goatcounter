<div class="filament-hidden">

![Filament GoatCounter](https://raw.githubusercontent.com/jeffersongoncalves/filament-goatcounter/2.x/art/jeffersongoncalves-filament-goatcounter.png)

</div>

# Filament GoatCounter

[![Buy Me A Coffee](https://img.shields.io/badge/Buy%20Me%20A%20Coffee-support-FFDD00?style=flat-square&logo=buy-me-a-coffee&logoColor=black)](https://buymeacoffee.com/jeffersongoncalves)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-goatcounter.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-goatcounter)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-goatcounter/fix-php-code-style-issues.yml?branch=2.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-goatcounter/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A2.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-goatcounter.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-goatcounter)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-goatcounter.svg?style=flat-square)](LICENSE.md)

Filament plugin for [GoatCounter](https://www.goatcounter.com) — open source, privacy-friendly web analytics — with a settings page powered by [Spatie Laravel Settings](https://github.com/spatie/laravel-settings). Manage GoatCounter from the Filament admin panel; the script is injected into the `<head>` of every panel page.

Built on top of [jeffersongoncalves/laravel-goatcounter](https://github.com/jeffersongoncalves/laravel-goatcounter).

## Compatibility

| Branch | Filament | Package version |
|--------|----------|-----------------|
| 1.x | 3.x | `^1.0` |
| 2.x | 4.x | `^2.0` |
| 3.x | 5.x | `^3.0` |

## Installation

```bash
composer require jeffersongoncalves/filament-goatcounter:"^2.0"
```

Publish the settings migrations and run them:

```bash
php artisan vendor:publish --tag=goatcounter-settings-migrations
php artisan migrate
```

## Usage

```php
use JeffersonGoncalves\Filament\GoatCounter\GoatCounterPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            GoatCounterPlugin::make(),
        ]);
}
```

The plugin registers a **GoatCounter** settings page and injects the script into the `<head>` of every panel page once the settings are complete.

| Field | Label |
|-------|-------|
| `code` | Site code |

### Disable the Settings Page

```php
GoatCounterPlugin::make()
    ->settingsPage(false),
```

To render the script outside Filament, add `@include('goatcounter::script')` to your own layout.

## Requirements

- PHP 8.2 or higher
- Filament 4.x

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
