<?php

return [
    'navigation_label' => 'GoatCounter',
    'navigation_group' => 'Settings',
    'title' => 'GoatCounter Settings',
    'sections' => [
        'goatcounter' => [
            'heading' => 'GoatCounter',
            'description' => 'Configure the GoatCounter tracking code for your site.',
        ],
    ],
    'fields' => [
        'code' => [
            'label' => 'Site code',
            'helper' => 'Your GoatCounter site code: the part before .goatcounter.com (e.g. mysite). Leave empty to disable tracking.',
        ],
    ],
];
