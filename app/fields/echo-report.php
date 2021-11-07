<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('echo_report');


$fields->setLocation('post_type', '==', 'echo_report');

$fields
    ->addSelect('mvr4seasons', [
        'label' => 'MVR or 4 Seasons?',
        'wrapper' => ['width' => '100'],
        'choices' => ['MVR', '4 Seasons']
    ])
    ->addDatePicker('date', [
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
    ->addText('patient', [
        'wrapper' => ['width' => '25']
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

    ->addGroup('LV_Wall-d', [
        'label' => 'LV Wall-d',
    ])
    ->addText('LVFW_Distolic_Thickness', [
        'label' => 'Thickness mm:',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'LVFW_Distolic_Thickness',
        ],
    ])
    ->addText('lower_range_LV_wall_D', [
        'label' => 'Lower Limit:',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'lower_range_LV_wall_D',
        ],
    ])
    ->addText('upper_range_LV_wall_D', [
        'label' => 'Upper Limit:',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'upper_range_LV_wall_D',
        ],
    ])
    ->addText('LVFW_DT_result', [
        'label' => 'Result',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'LVFW_DT_result',
        ],
    ])
    ->endGroup()

    ->addGroup('LV_Wall-s', [
        'label' => 'LV Wall-s'
    ])
    ->addText('LVFW_Systolic_Thickness', [
        'label' => 'Thickness MM',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'LVFW_Systolic_Thickness',
        ],
    ])
    ->addText('lower_range_LV_wall_S', [
        'label' => 'Lower Limit:',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'lower_range_LV_wall_S',
        ],
    ])
    ->addText('upper_range_LV_wall_S', [
        'label' => 'Upper Limit:',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'upper_range_LV_wall_S',
        ],
    ])
    ->addText('LVFW_ST_result', [
        'label' => 'Result',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'LVFW_ST_result',
        ],
    ])
    ->endGroup()
    ->addGroup('LV_Chamber-d', [
        'label' => 'LV Chamber-d',
    ])
    ->addText('Left_Vent_Diastolic', [
        'label' => 'Thickness MM',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'Left_Vent_Diastolic',
        ],
    ])
    ->addText('lower_range_LV_Chamber_D', [
        'label' => 'Lower Limit:',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'lower_range_LV_Chamber_D',
        ],
    ])
    ->addText('upper_range_LV_Chamber_D', [
        'label' => 'Upper Limit:',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'upper_range_LV_Chamber_D',
        ],
    ])
    ->addText('LV_DD_result', [
        'label' => 'Result',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'LV_DD_result',
        ],
    ])
    ->endGroup()

    ->addGroup('LV_Chamber-s', [
        'label' => 'LV Chamber-s',
    ])
    ->addText('Left_Vent_Systolic', [
        'label' => 'Thickness MM',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'Left_Vent_Systolic',
        ],
    ])
    ->addText('lower_range_LV_Chamber_S', [
        'label' => 'Lower Limit:',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'lower_range_LV_Chamber_S',
        ],
    ])
    ->addText('upper_range_LV_Chamber_S', [
        'label' => 'Upper Limit:',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'upper_range_LV_Chamber_S',
        ],
    ])
    ->addText('LV_SD_result', [
        'label' => 'Result',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'LV_SD_result',
        ],
    ])
    ->endGroup()

    ->addGroup('Fractional_Shortening', [
        'label' => 'Fractional Shortening',
    ])
    ->addText('Shortening_Fraction', [
        'label' => 'Fractional Shortening %',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'Shortening_Fraction',
        ],
    ])
    ->addText('lower_range_fractional_shortening', [
        'label' => 'Lower Limit:',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'lower_range_fractional_shortening',
        ],
    ])
    ->addText('upper_range_fractional_shortening', [
        'label' => 'Upper Limit:',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'upper_range_fractional_shortening',
        ],
    ])
    ->addText('SF_result', [
        'label' => 'Result',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'SF_result',
        ],
    ])
    ->endGroup()

    ->addGroup('Septum-d', [
        'label' => 'Septum-d',
    ])
    ->addText('IVS_Diastolic_Thickness', [
        'label' => 'Thickness MM',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'IVS_Diastolic_Thickness',
        ],
    ])
    ->addText('lower_range_septum_d', [
        'label' => 'Lower Limit',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'lower_range_septum_d',
        ],
    ])
    ->addText('upper_range_septum_d', [
        'label' => 'Upper Limit',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'upper_range_septum_d',
        ],
    ])
    ->addText('IVS_DT_result', [
        'label' => 'Result',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'IVS_DT_result',
        ],
    ])
    ->endGroup()

    ->addGroup('Septum-s', [
        'label' => 'Septum-s',
    ])
    ->addText('IVS_Systolic_Thickness', [
        'label' => 'Thickness MM',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'IVS_Systolic_Thickness',
        ],
    ])
    ->addText('lower_range_septum_s', [
        'label' => 'Lower Limit',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'lower_range_septum_s',
        ],
    ])
    ->addText('upper_range_septum_s', [
        'label' => 'Upper Limit',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'upper_range_septum_s',
        ],
    ])
    ->addText('IVS_ST_result', [
        'label' => 'Upper Limit',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'upper_range_septum_s',
        ],
    ])
    ->endGroup()

    ->addGroup('aorta', [
        'label' => 'Aorta',
    ])
    ->addText('Aortic_Root', [
        'label' => 'Aortic Root',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'Aortic_Root',
        ],
    ])
    ->addText('lower_range_aorta', [
        'label' => 'Lower Limit',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'lower_range_aorta',
        ],
    ])
    ->addText('upper_range_aorta', [
        'label' => 'Upper Limit',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'upper_range_aorta',
        ],
    ])
    ->addText('AR_result', [
        'label' => 'Result',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'AR_result',
        ],
    ])
    ->endGroup()

    ->addGroup('Left Atrium', [
        'label' => 'Left Atrium',
    ])
    ->addText('Left_Atrium', [
        'label' => 'Left Atrium',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'Left_Atrium',
        ],
    ])
    ->addText('lower_range_left_atrium', [
        'label' => 'Lower Limit',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'lower_range_left_atrium',
        ],
    ])
    ->addText('upper_range_left_atrium', [
        'label' => 'Upper Limit',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'upper_range_left_atrium',
        ],
    ])
    ->addText('LA_result', [
        'label' => 'Result',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'LA_result',
        ],
    ])
    ->endGroup()

    ->addGroup('la/ao', [
        'label' => 'LA/AO',
    ])
    ->addText('Left_Atrium_over_AO', [
        'label' => 'Left Atrium/AO',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'Left_Atrium_over_AO',
        ],
    ])
    ->addText('lower_range_la_over_ao', [
        'label' => 'Lower Limit',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'lower_range_la_over_ao',
        ],
    ])
    ->addText('upper_range_la_over_ao', [
        'label' => 'Lower Limit',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'upper_range_la_over_ao',
        ],
    ])
    ->addText('la_over_ao_result', [
        'label' => 'Result',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'la_over_ao_result',
        ],
    ])
    ->endGroup()

    ->addGroup('EPSS', [
        'label' => 'EPSS',
    ])
    ->addText('EPSS', [
        'label' => 'EPSS',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'EPSS',
        ],
    ])
    ->addText('upper_range_epss', [
        'label' => 'Upper Limit',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'upper_range_epss',
        ],
    ])
    ->addText('epss_result', [
        'label' => 'Result',
        'wrapper' => [
            'width' => '25',
            'class' => '',
            'id' => 'epss_result',
        ],
    ])

    ->endGroup()
    ->addText('m_mode_comments')
    ->addTextArea('echo_doppler_findings')
    ->addTextArea('Echo_B_mode_findings')
    ->addTextArea('Echo_Conclusions');

return $fields;
