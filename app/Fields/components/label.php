<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;
use Wor\Fields\Helpers\Importer;

$config = (object) [
  'ui' => 0,
  'wrapper' => ['width' => 16.666],
];
$importer = new Importer();
$label = new FieldsBuilder('label');

$label
  ->addGroup('label')  
    ->addText('text', [
      'required' => 1,
      'wrapper' => $config->wrapper,
    ])
      ->setInstructions('Label text')

    ->addSelect('font', [
      'ui' => $config->ui,
      'wrapper' => $config->wrapper,
      'default_value' => [],
      'allow_null' => 1,
      'placeholder' => 'Default'
    ])
      ->addChoices(
        ['u-font-primary' => 'Primary'],
        ['u-font-secondary' => 'Secondary']
      )
      ->setInstructions('Font family')

    ->addColorPicker('color', [
      'wrapper' => $config->wrapper,
    ])
      ->setInstructions('Label color')

    ->addSelect('size', [
      'ui' => $config->ui,
      'wrapper' => $config->wrapper,
      'default_value' => ['h2']
    ])
      ->addChoices(
        ['h2' => 'h2'], 
        ['h3' => 'h3'], 
        ['h4' => 'h4'],
        ['h5' => 'h5'],
        ['h6' => 'h6']
      )
      ->setInstructions('Label size')

    ->addSelect('display', [
      'ui' => $config->ui,
      'wrapper' => $config->wrapper,
      'default_value' => [],
      'allow_null' => 1,
      'placeholder' => 'Display heading'
    ])
      ->addChoices(
        ['display-1' => 'Display 1'],
        ['display-2' => 'Display 2'], 
        ['display-3' => 'Display 3'],
        ['display-4' => 'Display 4']
      )
      ->setInstructions('Display heading size')
      
    ->addFields($importer->get_partial('components.offset'))

  ->endGroup();

return $label;