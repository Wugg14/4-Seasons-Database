<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('invoice');


$fields->setLocation('post_type', '==', 'invoice');

$fields
    ->addDatePicker('date', [
        'wrapper' => ['width' => '50']
    ])
    ->addSelect('location', [
      'wrapper' => ['width' => '50'],
      'choices' => ['Field', 'Office - 4 Seasons']
    ])
    ->addGroup('Owner Information', [
        'description' => 'Owner information required for office visits',
    ])
      ->addText('owner')
      ->addText('owner_address')
      ->addText('phone')
    ->endGroup()
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
    ->addPostObject('service', [
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => [],
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => '',
        ],
        'post_type' => ['service'],
        'taxonomy' => [],
        'allow_null' => 0,
        'multiple' => 0,
        'return_format' => 'object',
        'ui' => 1,
    ])
    ->endRepeater();


return $fields;
