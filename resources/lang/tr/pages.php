<?php

return [
    'navigation_label' => 'GoatCounter',
    'navigation_group' => 'Ayarlar',
    'title' => 'GoatCounter ayarları',
    'sections' => [
        'goatcounter' => [
            'heading' => 'GoatCounter',
            'description' => 'Siteniz için GoatCounter izleme kodunu yapılandırın.',
        ],
    ],
    'fields' => [
        'code' => [
            'label' => 'Site kodu',
            'helper' => 'GoatCounter site kodunuz: .goatcounter.com\'dan önceki kısım (örn. sitem). İzlemeyi devre dışı bırakmak için boş bırakın.',
        ],
    ],
];
