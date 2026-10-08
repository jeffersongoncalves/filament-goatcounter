---
name: filament-goatcounter-development
description: Build and work with the Filament GoatCounter plugin — settings page and script injection in Filament panels.
---

# Filament GoatCounter Development

## When to use this skill

- Adding or changing the GoatCounter integration of a Filament panel
- Customizing the GoatCounter settings page
- Debugging a missing GoatCounter script in a panel

## Package Overview

- **Package**: `jeffersongoncalves/filament-goatcounter` (branch `1.x`)
- **Namespace**: `JeffersonGoncalves\Filament\GoatCounter`
- **Dependencies**: `jeffersongoncalves/filament-analytics-core:^1.0`, `jeffersongoncalves/laravel-goatcounter:^1.0`

## Setup

```php
use JeffersonGoncalves\Filament\GoatCounter\GoatCounterPlugin;

$panel->plugins([
    GoatCounterPlugin::make(),                        // settings page + script injection
    // GoatCounterPlugin::make()->settingsPage(false), // script injection only
]);
```

```bash
php artisan vendor:publish --tag=goatcounter-settings-migrations
php artisan migrate
```

## Settings Fields

| Field | Component |
|-------|-----------|
| `code` | TextInput |

## Troubleshooting

- **Script missing**: the settings are incomplete — `app(\JeffersonGoncalves\GoatCounter\Settings\GoatCounterSettings::class)->isConfigured()`.
- **Settings page errors**: the `goatcounter` settings group is missing — publish and run the migrations.
