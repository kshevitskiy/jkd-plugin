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
$fields = new FieldsBuilder('details');

$fields
  ->addRepeater('bio_details', [
    'label'         => __('Details'),
    'required'      => 1,
    'button_label'  => __('Add'),
    'layout'        => 'block'
  ])
    ->addText('subtitle', [
      'label'    => __('Subtitle'),
      'required' => 1,
      'wrapper'  => $config->wrapper
    ])
    ->addText('title', [
      'label'    => __('Title'),
      'required' => 1,
      'wrapper'  => $config->wrapper
    ])
    ->addWysiwyg('text', [
      'label' => __('Text'),
      'required' => 1,
    ]);

return $fields;