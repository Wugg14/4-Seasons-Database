<?php
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('service');


$fields->setLocation('post_type', '==', 'service');

return $fields;
