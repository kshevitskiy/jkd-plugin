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
$fields = new FieldsBuilder('achievements');

$fields
  ->addPostObject('achievements_posts', [
    'label' => __('Achievements'),
    'required' => 1,
    'post_type' => ['achievement'],
    'multiple' => 1,
    'return_format' => 'object',
    'ui' => 1
  ])


  ->addText('achievements_button_label', [
    'label'    => __('Button label'),
    'required' => 1,
    'wrapper'  => $config->wrapper
  ])
    ->setInstructions(__('Text Input'))

    
  ->addPageLink('achievements_button_link', [
    'label'          => __('Button link'),
    'allow_archives' => 0,
    'post_type'      => ['page'],
    'wrapper'        => $config->wrapper
  ])
    ->setInstructions(__('Link to the page'))


  ->addRepeater('achievements_stats', [
    'label'         => __('Stats'),
    'required'      => 1,
    'button_label'  => __('Add'),
    'layout'        => 'block'
  ])
    ->addImage('stat_icon', [
      'label' => __('Icon'),
      'required' => 1,
      'return_format' => 'url',
      'preview_size' => 'thumbnail',
      'library' => 'all',
      'wrapper'  => [
        'width' => 33
      ]
    ])
    ->addText('stat_label', [
      'label'    => __('Label'),
      'required' => 1,
      'wrapper'  => [
        'width' => 33
      ]
    ])
    ->addText('stat_value', [
      'label'    => __('Number'),
      'required' => 1,
      'wrapper'  => [
        'width' => 33
      ]
    ]);

return $fields;