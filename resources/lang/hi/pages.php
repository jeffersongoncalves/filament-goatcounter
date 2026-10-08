<?php

return [
    'navigation_label' => 'GoatCounter',
    'navigation_group' => 'सेटिंग्स',
    'title' => 'GoatCounter सेटिंग्स',
    'sections' => [
        'goatcounter' => [
            'heading' => 'GoatCounter',
            'description' => 'अपनी साइट के लिए GoatCounter ट्रैकिंग कोड कॉन्फ़िगर करें।',
        ],
    ],
    'fields' => [
        'code' => [
            'label' => 'साइट कोड',
            'helper' => 'आपका GoatCounter साइट कोड: .goatcounter.com से पहले का भाग (जैसे mysite)। ट्रैकिंग बंद करने के लिए खाली छोड़ें।',
        ],
    ],
];
