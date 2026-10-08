<?php

return [
    'navigation_label' => 'GoatCounter',
    'navigation_group' => 'Налаштування',
    'title' => 'Налаштування GoatCounter',
    'sections' => [
        'goatcounter' => [
            'heading' => 'GoatCounter',
            'description' => 'Налаштуйте код відстеження GoatCounter для вашого сайту.',
        ],
    ],
    'fields' => [
        'code' => [
            'label' => 'Код сайту',
            'helper' => 'Код сайту в GoatCounter: частина перед .goatcounter.com (наприклад, mysite). Залиште порожнім, щоб вимкнути відстеження.',
        ],
    ],
];
