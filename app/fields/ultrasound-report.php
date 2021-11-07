<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('ultrasound');


$fields->setLocation('post_type', '==', 'ultrasound_report');

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
    ->addText('sex', [
        'wrapper' => ['width' => '33']
    ])
    ->addText('species', [
        'wrapper' => ['width' => '33']
    ])
    ->addText('breed', [
        'wrapper' => ['width' => '33']
    ])
    ->addText('age', [
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
    ->addTextArea('clinicalHistory')
    ->addGroup('sonographic_findings')
    ->addSelect('liver', [
        'wrapper' => ['width' => '25'],
        'choices' => ['Normal', 'Abnormal', 'See Below', 'N.A.']
    ])
    ->addSelect('spleen', [
        'wrapper' => ['width' => '25'],
        'choices' => ['Normal', 'Abnormal', 'See Below', 'N.A.']
    ])
    ->addSelect('stomach', [
        'wrapper' => ['width' => '25'],
        'choices' => ['Normal', 'Abnormal', 'See Below', 'N.A.']
    ])
    ->addSelect('pancreas', [
        'wrapper' => ['width' => '25'],
        'choices' => ['Normal', 'Abnormal', 'See Below', 'N.A.']
    ])
    ->addSelect('intestines', [
        'wrapper' => ['width' => '25'],
        'choices' => ['Normal', 'Abnormal', 'See Below', 'N.A.']
    ])
    ->addSelect('adrenals', [
        'wrapper' => ['width' => '25'],
        'choices' => ['Normal', 'Abnormal', 'See Below', 'N.A.']
    ])
    ->addSelect('l_kidney', [
        'wrapper' => ['width' => '25'],
        'choices' => ['Normal', 'Abnormal', 'See Below', 'N.A.']
    ])
    ->addSelect('r_kidney', [
        'wrapper' => ['width' => '25'],
        'choices' => ['Normal', 'Abnormal', 'See Below', 'N.A.']
    ])
    ->addSelect('bladder', [
        'wrapper' => ['width' => '25'],
        'choices' => ['Normal', 'Abnormal', 'See Below', 'N.A.']
    ])
    ->addSelect('sublum', [
        'wrapper' => ['width' => '25'],
        'choices' => ['Normal', 'Abnormal', 'See Below', 'N.A.']
    ])
    ->addSelect('prostate', [
        'wrapper' => ['width' => '25'],
        'choices' => ['Normal', 'Abnormal', 'See Below', 'N.A.']
    ])
    ->addSelect('uterus', [
        'wrapper' => ['width' => '25'],
        'choices' => ['Normal', 'Abnormal', 'See Below', 'N.A.']
    ])
    ->endGroup()
    ->addTextArea('conclusions')
    ->addTextArea('findings');

return $fields;
