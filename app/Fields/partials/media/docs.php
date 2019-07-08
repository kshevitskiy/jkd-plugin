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
$fields = new FieldsBuilder('docs');

$fields
  ->addRepeater('docs', [
    'label'         => __('Documents'),
    'required'      => 1,
    'button_label'  => __('Add'),
    'layout'        => 'block'
  ])
    ->addFile('doc_link', [
      'label' => __('File'),
      'required' => 1,
      'wrapper' => $config->wrapper,
      'return_format' => 'url',
      'library' => 'all',
      'mime_types' => 'pdf',
    ])
    ->addText('doc_name', [
      'label'    => __('File Name'),
      'required' => 1,
      'wrapper'  => $config->wrapper
    ]);

return $fields;