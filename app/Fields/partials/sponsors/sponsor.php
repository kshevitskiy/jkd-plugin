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
$fields = new FieldsBuilder('sponsors');

$fields
  ->addRepeater('sponsors_list', [
    'label'         => __('Sponsor'),
    'required'      => 1,
    'button_label'  => __('Add'),
    'layout'        => 'block'
  ])
    ->addImage('logo', [
      'label' => __('Logo'),
      'required' => 1,
      'return_format' => 'url',
      'preview_size' => 'thumbnail',
      'library' => 'all',
      'wrapper'  => $config->wrapper
    ])
    ->addText('name', [
      'label'    => __('Name'),
      'required' => 1,
      'wrapper'  => $config->wrapper
    ])
    ->addWysiwyg('text', [
      'label' => __('Text'),
      'required' => 1,
    ]);

return $fields;