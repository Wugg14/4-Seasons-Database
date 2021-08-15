<?php
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('radio');


$fields->setLocation('post_type', '==', 'radio');

$fields
  ->addText('date')
  ->addText('mvr4seasons')
  ->addText('patient')
  ->addText('species')
  ->addText('owner')
  ->addText('doctor')
  ->addText('Rad_Image_Date')
  ->addText('practice')
  ->addText('Rad_NumImages')
  ->addText('phone')
  ->addText('views')
  ->addText('Rad_Findings')
  ->addText('Rad_Conclusions')
  ->addText('submit');

return $fields;
