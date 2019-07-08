<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;
use Wor\Fields\Helpers\Importer;

$config = (object) [
  'wrapper' => [
    'width' => 20
  ]
];

$importer = new Importer();
$fields = new FieldsBuilder('achievement');

$fields
  ->addDatePicker('achievement_date', [
    'label'           => __('Date'),
    'required'        => 1,
    'wrapper'         => $config->wrapper,
    'display_format'  => 'F j, Y',
    'return_format'   => 'd-m-Y'
  ])
  ->addText('achievement_city', [
    'label'    => __('City'),
    'required' => 1,
    'wrapper'  => $config->wrapper
  ])
  ->addText('achievement_prize', [
    'label'    => __('Prize'),
    'required' => 1,
    'wrapper'  => $config->wrapper
  ])
  ->addText('achievement_comment', [
    'label'    => __('Comment'),
    'wrapper'  => $config->wrapper
  ])
  ->addTrueFalse('achievement_is_featured', [
    'label'         => __('Featured'),
    'wrapper'       => $config->wrapper,
    'default_value' => 0,
    'ui'            => 1,
    'ui_on_text'    => __('Yes'),
    'ui_off_text'   => __('No'),
  ]);

return $fields;