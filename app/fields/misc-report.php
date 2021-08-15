<?php
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('misc');


$fields->setLocation('post_type', '==', 'misc');

$fields
  ->addText('date')
  ->addText('mvr4seasons')
  ->addText('doctor')
  ->addText('practice')
  ->addText('patient')
  ->addText('owner')
  ->addText('service')
  ->addText('charge')
  ->addText('description')
  ->addText('submit');


return $fields;
