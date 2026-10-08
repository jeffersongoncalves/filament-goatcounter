<?php

return [
    'navigation_label' => 'GoatCounter',
    'navigation_group' => 'الإعدادات',
    'title' => 'إعدادات GoatCounter',
    'sections' => [
        'goatcounter' => [
            'heading' => 'GoatCounter',
            'description' => 'اضبط كود تتبع GoatCounter لموقعك.',
        ],
    ],
    'fields' => [
        'code' => [
            'label' => 'رمز الموقع',
            'helper' => 'رمز موقعك في GoatCounter: الجزء الذي يسبق ‎.goatcounter.com (مثل mysite). اتركه فارغًا لتعطيل التتبع.',
        ],
    ],
];
