<?php
namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('echo');


$fields->setLocation('post_type', '==', 'echo');

$fields
  ->addText('date', [
      'wrapper' => ['width' => '33']
  ])
  ->addText('mvr4seasons', [
      'wrapper' => ['width' => '33']
  ])
  ->addText('doctor', [
      'wrapper' => ['width' => '33']
  ])
  ->addText('practice', [
      'wrapper' => ['width' => '33']
  ])
  ->addText('patient', [
      'wrapper' => ['width' => '33']
  ])
  ->addText('owner', [
      'wrapper' => ['width' => '33']
  ])
  ->addText('age', [
      'wrapper' => ['width' => '33']
  ])
  ->addText('species', [
      'wrapper' => ['width' => '33']
  ])
  ->addText('breed', [
      'wrapper' => ['width' => '33']
  ])
  ->addText('sex', [
      'wrapper' => ['width' => '33']
  ])
  ->addText('weight', [
      'wrapper' => ['width' => '33']
  ])
  ->addTextArea('clinical_history')
  ->addText('LVFW_Distolic_Thickness')
  ->addText('lower_range_LV_wall_D')
  ->addText('upper_range_LV_wall_D')
  ->addText('LVFW_DT_result')

  ->addText('LVFW_Systolic_Thickness')
  ->addText('lower_range_LV_wall_S')
  ->addText('upper_range_LV_wall_S')
  ->addText('LVFW_ST_result')

  ->addText('Left_Vent_Diastolic')
  ->addText('lower_range_LV_Chamber_D')
  ->addText('upper_range_LV_Chamber_D')
  ->addText('LV_DD_result')

  ->addText('Left_Vent_Systolic')
  ->addText('lower_range_LV_Chamber_S')
  ->addText('upper_range_LV_Chamber_S')
  ->addText('LV_SD_result')

  ->addText('Shortening_Fraction')
  ->addText('lower_range_fractional_shortening')
  ->addText('upper_range_fractional_shortening')
  ->addText('SF_result')

  ->addText('IVS_Diastolic_Thickness')
  ->addText('lower_range_septum_d')
  ->addText('upper_range_septum_d')
  ->addText('IVS_DT_result')

  ->addText('IVS_Systolic_Thickness')
  ->addText('lower_range_septum_s')
  ->addText('upper_range_septum_s')
  ->addText('IVS_ST_result')

  ->addText('Aortic_Root')
  ->addText('lower_range_aorta')
  ->addText('upper_range_aorta')
  ->addText('AR_result')

  ->addText('Left_Atrium')
  ->addText('lower_range_left_atrium')
  ->addText('upper_range_left_atrium')
  ->addText('LA_result')

  ->addText('Left_Atrium_over_AO')
  ->addText('lower_range_la_over_ao')
  ->addText('upper_range_la_over_ao')
  ->addText('la_over_ao_result')

  ->addText('EPSS')
  ->addText('upper_range_epss')
  ->addText('epss_result')

  ->addText('m_mode_comments')
  ->addText('echo_doppler_findings')
  ->addText('Echo_B_mode_findings')
  ->addText('Echo_Conclusions');

return $fields;
