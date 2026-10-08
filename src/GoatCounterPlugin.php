<?php

namespace JeffersonGoncalves\Filament\GoatCounter;

use JeffersonGoncalves\Filament\GoatCounter\Pages\ManageGoatCounterSettings;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class GoatCounterPlugin extends AbstractAnalyticsPlugin
{
    public function getId(): string
    {
        return 'filament-goatcounter';
    }

    protected function getSettingsPageClass(): ?string
    {
        return ManageGoatCounterSettings::class;
    }
}
