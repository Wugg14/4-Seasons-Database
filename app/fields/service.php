<?php
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('service');


$fields->setLocation('post_type', '==', 'service');

$fields
  ->addText('service_type')
  ->addText('service_abbr')
  ->addTextArea('description')
  ->addNumber('price');

return $fields;
