<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;
use Wor\Fields\Helpers\Importer;

$config = (object) [
  'wrapper' => [
    'width' => 33
  ]
];

$importer = new Importer();
$fields = new FieldsBuilder('event');

$fields
  ->addDatePicker('event_date', [
    'label'           => __('Event Date'),
    'required'        => 1,
    'wrapper'         => $config->wrapper,
    'display_format'  => 'F j, Y',
    'return_format'   => 'd.m.Y'
  ])
  ->addText('event_city', [
    'label'    => __('City'),
    'required' => 1,
    'wrapper'  => $config->wrapper
  ])
  ->addTrueFalse('event_report', [
    'label'         => __('Add to Reports'),
    'wrapper'       => $config->wrapper,
    'default_value' => 0,
    'ui'            => 1,
    'ui_on_text'    => __('Yes'),
    'ui_off_text'   => __('No'),
  ]);

return $fields;