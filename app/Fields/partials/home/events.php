<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;
use Wor\Fields\Helpers\Importer;

$config = (object) [
  'wrapper' => [
    'width' => 50
  ]
];

$importer = new Importer();
$fields = new FieldsBuilder('events');

$fields
  ->addText('events_button_label', [
    'label'     => __('Button label'),
    'required'  => 1,
    'wrapper'   => $config->wrapper
  ])
    ->setInstructions(__('Text Input'))

  ->addPageLink('events_button_link', [
    'label'           => __('Button link'),
    'required'        => 1,
    'allow_archives'  => 0,
    'post_type'       => ['page'],
    'wrapper'         => $config->wrapper
  ])
    ->setInstructions(__('Link to the page'));

return $fields;