<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('ct_report');

$fields->setLocation('post_type', '==', 'ct_report');

$fields
    ->addText('date')
    ->addText('mvr4seasons')
    ->addText('patient')
    ->addText('species')
    ->addText('owner')
    ->addText('doctor')
    ->addText('CT_Image_Date')
    ->addText('practice')
    ->addText('CT_NumImages')
    ->addText('phone')
    ->addText('views')
    ->addText('CT_Findings')
    ->addText('CT_Conclusions');

return $fields;
