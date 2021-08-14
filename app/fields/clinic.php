<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('clinic');


$fields->setLocation('post_type', '==', 'clinic');

$fields
    ->addText('company', [
        'wrapper' => ['width' => '50']
    ])
    ->addText('nickname', [
        'wrapper' => ['width' => '50']
    ])
    ->addText('street', [
        'wrapper' => ['width' => '25']
    ])
    ->addText('city', [
        'wrapper' => ['width' => '25']
    ])
    ->addText('state', [
        'wrapper' => ['width' => '25']
    ])
    ->addText('zip', [
        'wrapper' => ['width' => '25']
    ])
    ->addText('phone', [
        'wrapper' => ['width' => '50']
    ])
    ->addText('email', [
        'wrapper' => ['width' => '50']
    ])
    ->addTextArea('notes');

return $fields;
