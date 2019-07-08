<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;
use Wor\Fields\Helpers\Template;

$config = (object) [
  'ui' => 1,
  'placement' => 'left'
];
$general = new FieldsBuilder('general');

$general
    ->addTab('general', [
        'placement' => $config->placement
        ])
        ->addTrueFalse('enable_featured_image', [
            'ui' => $config->ui
            ])
            ->setDefaultValue('1')
            ->setInstructions(__('Enables automatically displaying the featured image.'))

    ->addTab('header', [
        'placement' => $config->placement
        ])            
        ->addTrueFalse('transparent_header', [
            'ui' => $config->ui
            ])
            ->setDefaultValue('0')
            ->setInstructions(__('Enables transparent background for header.'));
        
return $general;