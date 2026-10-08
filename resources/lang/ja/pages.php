<?php

return [
    'navigation_label' => 'GoatCounter',
    'navigation_group' => '設定',
    'title' => 'GoatCounter 設定',
    'sections' => [
        'goatcounter' => [
            'heading' => 'GoatCounter',
            'description' => 'サイトの GoatCounter トラッキングコードを設定します。',
        ],
    ],
    'fields' => [
        'code' => [
            'label' => 'サイトコード',
            'helper' => 'GoatCounter のサイトコード（.goatcounter.com の前の部分、例：mysite）。 トラッキングを無効にするには空のままにします。',
        ],
    ],
];
