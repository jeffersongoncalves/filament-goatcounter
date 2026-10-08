<?php

return [
    'navigation_label' => 'GoatCounter',
    'navigation_group' => 'Configurações',
    'title' => 'Configurações do GoatCounter',
    'sections' => [
        'goatcounter' => [
            'heading' => 'GoatCounter',
            'description' => 'Configure o código de rastreamento do GoatCounter do seu site.',
        ],
    ],
    'fields' => [
        'code' => [
            'label' => 'Código do site',
            'helper' => 'O código do site no GoatCounter: a parte antes de .goatcounter.com (ex.: meusite). Deixe vazio para desativar o rastreamento.',
        ],
    ],
];
