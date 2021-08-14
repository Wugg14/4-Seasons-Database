<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('doctor');


$fields->setLocation('post_type', '==', 'doctor');

$fields
    ->addPostObject('Clinic', [
        'label' => 'Clinic',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => [],
        'wrapper' => [
            'width' => '',
            'class' => '',
            'id' => '',
        ],
        'post_type' => ['clinic'],
        'taxonomy' => [],
        'allow_null' => 0,
        'multiple' => 0,
        'return_format' => 'object',
        'ui' => 1,
    ])
    ->addText('first_name', [
        'wrapper' => ['width' => '33']
    ])
    ->addText('middle', [
        'wrapper' => ['width' => '33']
    ])
    ->addText('last_name', [
        'wrapper' => ['width' => '33']
    ])
    ->addText('phone', [
        'wrapper' => ['width' => '50']
    ])
    ->addText('email', [
        'wrapper' => ['width' => '50']
    ])
    ->addTextArea('Notes');

return $fields;
