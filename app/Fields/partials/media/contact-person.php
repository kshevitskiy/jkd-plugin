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
  ->addImage('person_photo', [
    'label' => __('Photo'),
    'required' => 1,
    'return_format' => 'url',
    'preview_size' => 'thumbnail',    
    'library' => 'all',
    'min_width' => '250',
    'min_height' => '250',
    'max_width' => '650',
    'max_height' => '650'
  ])
  ->addText('person_name', [
    'label'    => __('Name'),
    'required' => 1,
    'wrapper'  => $config->wrapper
  ])
  ->addText('person_job_position', [
    'label'    => __('Job Position'),
    'required' => 1,
    'wrapper'  => $config->wrapper
  ])
  ->addText('person_email', [
    'label'    => __('Email Address'),
    'required' => 1,
    'wrapper'  => $config->wrapper
  ])
  ->addText('person_tel', [
    'label'    => __('Telephone'),
    'required' => 1,
    'wrapper'  => $config->wrapper
  ]);


return $fields;