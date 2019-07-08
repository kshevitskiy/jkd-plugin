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
$fields = new FieldsBuilder('contact_person');

$fields
  ->addText('contact_form_shortcode', [
    'label'    => __('Contact Form Shortcode'),
    'required' => 1,
    'wrapper'  => $config->wrapper
  ]);

return $fields;