<?php
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('misc');


$fields->setLocation('post_type', '==', 'misc');

$fields
  ->addSelect('mvr4seasons', [
      'label' => 'MVR or 4 Seasons?',
      'wrapper' => ['width' => '100'],
      'choices' => ['MVR', '4 Seasons']
  ])
  ->addDatePicker('date', [
      'wrapper' => ['width' => '25']
  ])
  ->addText('patient', [
      'wrapper' => ['width' => '25']
  ])
  ->addText('species', [
      'wrapper' => ['width' => '25']
  ])
  ->addText('owner', [
      'wrapper' => ['width' => '25']
  ])
  ->addPostObject('doctor', [
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => [],
      'wrapper' => [
          'width' => '25',
          'class' => '',
          'id' => '',
      ],
      'post_type' => ['doctor'],
      'taxonomy' => [],
      'allow_null' => 0,
      'multiple' => 0,
      'return_format' => 'object',
      'ui' => 1,
  ])
  ->addPostObject('practice', [
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => [],
      'wrapper' => [
          'width' => '25',
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
  ->addTextArea('description');


return $fields;
