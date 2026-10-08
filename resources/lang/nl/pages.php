<?php

return [
    'navigation_label' => 'GoatCounter',
    'navigation_group' => 'Instellingen',
    'title' => 'GoatCounter-instellingen',
    'sections' => [
        'goatcounter' => [
            'heading' => 'GoatCounter',
            'description' => 'Configureer de GoatCounter-trackingcode voor je site.',
        ],
    ],
    'fields' => [
        'code' => [
            'label' => 'Sitecode',
            'helper' => 'Je GoatCounter-sitecode: het deel vóór .goatcounter.com (bijv. mijnsite). Laat leeg om tracking uit te schakelen.',
        ],
    ],
];
