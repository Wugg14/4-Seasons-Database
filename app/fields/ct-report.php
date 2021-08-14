<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('ct_report');

$fields->setLocation('post_type', '==', 'ct_report');

$fields
    ->addText('test', [
        'wrapper' => [
            'width' => '50%'
        ],
    ])
    ->addText('test2', [
        'wrapper' => [
            'width' => '50%'
        ],
    ]);

return $fields;
