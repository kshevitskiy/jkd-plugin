<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;
use Wor\Fields\Helpers\Importer;

$config = (object) [
  'wrapper' => [
    'width' => 100
  ]
];

$importer = new Importer();
$fields = new FieldsBuilder('gallery');

$fields
  ->addGallery('media_gallery', [
    'label' => __('Gallery'),
    'required' => 1,
    'library' => 'all',
    'min_width' => '1280',
    'min_height' => '720',
    'wrapper'  => $config->wrapper
  ]);

return $fields;