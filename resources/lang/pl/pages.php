<?php

return [
    'navigation_label' => 'GoatCounter',
    'navigation_group' => 'Ustawienia',
    'title' => 'Ustawienia GoatCounter',
    'sections' => [
        'goatcounter' => [
            'heading' => 'GoatCounter',
            'description' => 'Skonfiguruj kod śledzenia GoatCounter dla swojej witryny.',
        ],
    ],
    'fields' => [
        'code' => [
            'label' => 'Kod witryny',
            'helper' => 'Kod witryny w GoatCounter: część przed .goatcounter.com (np. mojastrona). Pozostaw puste, aby wyłączyć śledzenie.',
        ],
    ],
];
