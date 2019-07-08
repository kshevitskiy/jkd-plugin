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
$fields = new FieldsBuilder('press_pack');

$fields
  ->addFile('press_pack_file_url', [
    'label' => __('Press Pack'),
    'required' => 1,
    'wrapper' => $config->wrapper,
    'return_format' => 'url',
    'library' => 'all',
    'mime_types' => 'zip'
  ]);

return $fields;