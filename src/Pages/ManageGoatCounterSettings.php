<?php

namespace JeffersonGoncalves\Filament\GoatCounter\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;
use JeffersonGoncalves\GoatCounter\Settings\GoatCounterSettings;

class ManageGoatCounterSettings extends SettingsPage
{
    protected static string $settings = GoatCounterSettings::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-chart-bar';

    public static function getNavigationLabel(): string
    {
        return __('filament-goatcounter::pages.navigation_label');
    }

    public static function getNavigationGroup(): string|\UnitEnum|null
    {
        return AbstractAnalyticsPlugin::navigationGroupFor('filament-goatcounter') ?? __('filament-goatcounter::pages.navigation_group');
    }

    public function getTitle(): string
    {
        return __('filament-goatcounter::pages.title');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->schema([
                Section::make(__('filament-goatcounter::pages.sections.goatcounter.heading'))
                    ->description(__('filament-goatcounter::pages.sections.goatcounter.description'))
                    ->schema([
                        TextInput::make('code')
                            ->label(__('filament-goatcounter::pages.fields.code.label'))
                            ->helperText(__('filament-goatcounter::pages.fields.code.helper'))
                            ->placeholder('mysite')
                            ->regex('/^[a-z0-9-]+$/i')
                            ->maxLength(50)
                            ->nullable(),
                    ]),
            ]);
    }
}
