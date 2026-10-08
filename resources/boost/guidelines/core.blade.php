## Filament GoatCounter

Filament plugin for GoatCounter with a settings page powered by Spatie Laravel Settings. The script is injected at `PanelsRenderHook::HEAD_START` of every panel page once the settings are complete.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-goatcounter:"^2.0"
php artisan vendor:publish --tag=goatcounter-settings-migrations
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\GoatCounter\GoatCounterPlugin;

$panel->plugins([
    GoatCounterPlugin::make(),
]);
</code-snippet>
@endverbatim

### Architecture
- `GoatCounterPlugin` extends `JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin` and registers `ManageGoatCounterSettings` (disable with `->settingsPage(false)`)
- `GoatCounterServiceProvider` extends `AbstractAnalyticsServiceProvider` and injects the `goatcounter::script` view from `jeffersongoncalves/laravel-goatcounter`
- `ManageGoatCounterSettings` is a `SettingsPage` bound to `JeffersonGoncalves\GoatCounter\Settings\GoatCounterSettings`
- Translations live under `filament-goatcounter::pages.*`
