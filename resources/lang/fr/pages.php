<?php

return [
    'navigation_label' => 'GoatCounter',
    'navigation_group' => 'Paramètres',
    'title' => 'Paramètres de GoatCounter',
    'sections' => [
        'goatcounter' => [
            'heading' => 'GoatCounter',
            'description' => 'Configurez le code de suivi GoatCounter de votre site.',
        ],
    ],
    'fields' => [
        'code' => [
            'label' => 'Code du site',
            'helper' => 'Le code de votre site GoatCounter : la partie avant .goatcounter.com (ex. : monsite). Laissez vide pour désactiver le suivi.',
        ],
    ],
];
