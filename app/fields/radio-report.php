<?php
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('radio');


$fields->setLocation('post_type', '==', 'radio');

$fields
  ->addSelect('mvr4seasons', [
      'label' => 'MVR or 4 Seasons?',
      'wrapper' => ['width' => '100'],
      'choices' => ['MVR', '4 Seasons']
  ])
  ->addDatePicker('date', [
      'wrapper' => ['width' => '33']
  ])
  ->addText('patient', [
      'wrapper' => ['width' => '33']
  ])
  ->addText('species', [
      'wrapper' => ['width' => '33']
  ])
  ->addText('owner', [
      'wrapper' => ['width' => '33']
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
  ->addText('phone', [
      'wrapper' => ['width' => '33']
  ])
  ->addDatePicker('Rad_Image_Date', [
      'wrapper' => ['width' => '33']
  ])
  ->addText('Rad_NumImages', [
      'wrapper' => ['width' => '33']
  ])
  ->addText('views', [
      'wrapper' => ['width' => '33']
  ])
  ->addTextArea('Rad_Findings')
  ->addTextArea('Rad_Conclusions');

return $fields;
