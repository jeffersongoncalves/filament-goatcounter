<?php

return [
    'navigation_label' => 'GoatCounter',
    'navigation_group' => '设置',
    'title' => 'GoatCounter 设置',
    'sections' => [
        'goatcounter' => [
            'heading' => 'GoatCounter',
            'description' => '为你的网站配置 GoatCounter 跟踪代码。',
        ],
    ],
    'fields' => [
        'code' => [
            'label' => '站点代码',
            'helper' => '你的 GoatCounter 站点代码：.goatcounter.com 之前的部分（例如 mysite）。 留空则停用跟踪。',
        ],
    ],
];
