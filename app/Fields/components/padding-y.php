<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
  'ui' => 0,
  'wrapper' => ['width' => 50],
];
$padding = new FieldsBuilder('padding_y');

$padding
  ->addSelect('padding_top', [
    'ui' => $config->ui,
    'wrapper' => $config->wrapper,
    'default_value' => [],
    'allow_null' => 1,
    'placeholder' => 'No padding'
  ])
    ->addChoices(
      ['pt-1' => 'Padding 1'],
      ['pt-2' => 'Padding 2'], 
      ['pt-3' => 'Padding 3'],
      ['pt-4' => 'Padding 4'],
      ['pt-5' => 'Padding 5']
    )
    ->setInstructions('Padding top')

  ->addSelect('padding_bottom', [
    'ui' => $config->ui,
    'wrapper' => $config->wrapper,
    'default_value' => [],
    'allow_null' => 1,
    'placeholder' => 'No padding'
  ])
    ->addChoices(
      ['pb-1' => 'Padding 1'],
      ['pb-2' => 'Padding 2'], 
      ['pb-3' => 'Padding 3'],
      ['pb-4' => 'Padding 4'],
      ['pb-5' => 'Padding 5']
    )
    ->setInstructions('Padding bottom');

return $padding;      