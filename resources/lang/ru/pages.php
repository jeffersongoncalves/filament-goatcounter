<?php

return [
    'navigation_label' => 'GoatCounter',
    'navigation_group' => 'Настройки',
    'title' => 'Настройки GoatCounter',
    'sections' => [
        'goatcounter' => [
            'heading' => 'GoatCounter',
            'description' => 'Настройте код отслеживания GoatCounter для вашего сайта.',
        ],
    ],
    'fields' => [
        'code' => [
            'label' => 'Код сайта',
            'helper' => 'Код сайта в GoatCounter: часть перед .goatcounter.com (например, mysite). Оставьте пустым, чтобы отключить отслеживание.',
        ],
    ],
];
