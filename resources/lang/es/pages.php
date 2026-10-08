<?php

return [
    'navigation_label' => 'GoatCounter',
    'navigation_group' => 'Configuración',
    'title' => 'Configuración de GoatCounter',
    'sections' => [
        'goatcounter' => [
            'heading' => 'GoatCounter',
            'description' => 'Configura el código de seguimiento de GoatCounter de tu sitio.',
        ],
    ],
    'fields' => [
        'code' => [
            'label' => 'Código del sitio',
            'helper' => 'El código del sitio en GoatCounter: la parte antes de .goatcounter.com (p. ej., misitio). Déjalo vacío para desactivar el seguimiento.',
        ],
    ],
];
