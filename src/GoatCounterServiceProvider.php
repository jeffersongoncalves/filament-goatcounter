<?php

namespace JeffersonGoncalves\Filament\GoatCounter;

use Filament\View\PanelsRenderHook;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsServiceProvider;

class GoatCounterServiceProvider extends AbstractAnalyticsServiceProvider
{
    protected function packageName(): string
    {
        return 'filament-goatcounter';
    }

    protected function renderHooks(): array
    {
        return [
            PanelsRenderHook::HEAD_START => 'goatcounter::script',
        ];
    }
}
