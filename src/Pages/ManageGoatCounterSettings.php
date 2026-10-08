<?php

namespace JeffersonGoncalves\Filament\GoatCounter\Pages;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use JeffersonGoncalves\GoatCounter\Settings\GoatCounterSettings;

class ManageGoatCounterSettings extends SettingsPage
{
    protected static string $settings = GoatCounterSettings::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    public static function getNavigationLabel(): string
    {
        return __('filament-goatcounter::pages.navigation_label');
    }

    public static function getNavigationGroup(): ?string
    {
        return __('filament-goatcounter::pages.navigation_group');
    }

    public function getTitle(): string
    {
        return __('filament-goatcounter::pages.title');
    }

    public function form(Form $form): Form
    {
        return $form
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
