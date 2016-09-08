<?php

return [
    'operator' => [
        'required' => true,
        'type'     => 'anomaly.field_type.select',
        'config'   => [
            'options' => [
                'has'           => 'anomaly.extension.tag_discount_filter::configuration.operator.options.has',
                'does_not_have' => 'anomaly.extension.tag_discount_filter::configuration.operator.options.does_not_have',
            ],
        ],
    ],
    'value'    => [
        'required' => true,
        'type'     => 'anomaly.field_type.text',
    ],
];
