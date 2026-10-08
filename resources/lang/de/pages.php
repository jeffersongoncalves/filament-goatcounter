<?php

return [
    'navigation_label' => 'GoatCounter',
    'navigation_group' => 'Einstellungen',
    'title' => 'GoatCounter-Einstellungen',
    'sections' => [
        'goatcounter' => [
            'heading' => 'GoatCounter',
            'description' => 'Konfigurieren Sie den GoatCounter-Tracking-Code für Ihre Website.',
        ],
    ],
    'fields' => [
        'code' => [
            'label' => 'Site-Code',
            'helper' => 'Ihr GoatCounter-Site-Code: der Teil vor .goatcounter.com (z. B. meineseite). Leer lassen, um das Tracking zu deaktivieren.',
        ],
    ],
];
