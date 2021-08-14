<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('invoice');


$fields->setLocation('post_type', '==', 'invoice');

$fields
    ->addRepeater('reports')
    ->addPostObject('post_object_field', [
        'label' => 'Post Object Field',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => [],
        'wrapper' => [
            'width' => '',
            'class' => '',
            'id' => '',
        ],
        'post_type' => ['ct_report', 'xray_report'],
        'taxonomy' => [],
        'allow_null' => 0,
        'multiple' => 0,
        'return_format' => 'object',
        'ui' => 1,
    ])
    ->addText('nickname')
    ->endRepeater();


return $fields;
