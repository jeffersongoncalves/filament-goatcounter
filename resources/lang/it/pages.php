<?php

return [
    'navigation_label' => 'GoatCounter',
    'navigation_group' => 'Impostazioni',
    'title' => 'Impostazioni di GoatCounter',
    'sections' => [
        'goatcounter' => [
            'heading' => 'GoatCounter',
            'description' => 'Configura il codice di tracciamento GoatCounter del tuo sito.',
        ],
    ],
    'fields' => [
        'code' => [
            'label' => 'Codice del sito',
            'helper' => 'Il codice del sito GoatCounter: la parte prima di .goatcounter.com (es. miosito). Lascia vuoto per disattivare il tracciamento.',
        ],
    ],
];
