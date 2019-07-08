<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;
use Wor\Fields\Helpers\Importer;

$importer = new Importer();
$config = (object) [
  'ui' => 1,
  'wrapper' => ['width' => 50],
  'rows' => '5',
];

$tab = new FieldsBuilder('tab');

$tab
    ->addGroup('tab')
      ->addText('title', [
        'required' => 1,
        'wrapper' => $config->wrapper
        ])
        ->setInstructions('Tab title.')      
        
      ->addLink('button', [
        'wrapper' => $config->wrapper
        ])
        ->setInstructions('Tab button')

      ->addFields($importer->get_partial('components.label'))
      
      ->addTextarea('copy', [
        'label' => 'Copy', 
        'rows' => $config->rows,
        ])
        ->setInstructions('Tab text content')
            
    ->endGroup();

return $tab;