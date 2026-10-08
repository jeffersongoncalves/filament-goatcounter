<?php

use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Foundation\Auth\User;
use JeffersonGoncalves\Filament\GoatCounter\GoatCounterPlugin;
use JeffersonGoncalves\Filament\GoatCounter\Pages\ManageGoatCounterSettings;
use JeffersonGoncalves\GoatCounter\Settings\GoatCounterSettings;
use Livewire\Livewire;

beforeEach(function () {
    Filament::setCurrentPanel(Filament::getPanel('test'));
    $this->actingAs((new User)->forceFill(['id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com']));
});

it('registers the settings page on the panel', function () {
    expect(Filament::getPanel('test')->getPages())->toContain(ManageGoatCounterSettings::class)
        ->and(GoatCounterPlugin::make()->getId())->toBe('filament-goatcounter');
});

it('uses translated labels', function () {
    expect(ManageGoatCounterSettings::getNavigationLabel())->toBe('GoatCounter');

    app()->setLocale('pt_BR');

    expect((new ManageGoatCounterSettings)->getTitle())->toBe('Configurações do GoatCounter');
});

it('saves the settings from the page', function () {
    Livewire::test(ManageGoatCounterSettings::class)
        ->fillForm(['code' => 'mysite'])
        ->call('save')
        ->assertHasNoFormErrors();

    expect(app(GoatCounterSettings::class)->refresh()->isConfigured())->toBeTrue()
        ->and(app(GoatCounterSettings::class)->refresh()->code)->toBe('mysite');
});

it('rejects an invalid value', function () {
    Livewire::test(ManageGoatCounterSettings::class)
        ->fillForm(['code' => 'evil.com/x"><script>alert(1)</script>'])
        ->call('save')
        ->assertHasFormErrors(['code']);
});

it('injects the GoatCounter script into the panel once configured', function () {
    $settings = app(GoatCounterSettings::class);
    $settings->code = 'mysite';
    $settings->save();

    expect((string) FilamentView::renderHook(PanelsRenderHook::HEAD_START))->toContain('gc.zgo.at');
});
