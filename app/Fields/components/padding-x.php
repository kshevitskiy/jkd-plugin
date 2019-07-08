<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
  'ui' => 0,
  'wrapper' => ['width' => 50],
];
$padding = new FieldsBuilder('padding_x');

$padding
  ->addSelect('padding_left', [
    'ui' => $config->ui,
    'wrapper' => $config->wrapper,
    'default_value' => [],
    'allow_null' => 1,
    'placeholder' => 'No padding'
  ])
    ->addChoices(
      ['pl-1' => 'Padding 1'],
      ['pl-2' => 'Padding 2'], 
      ['pl-3' => 'Padding 3'],
      ['pl-4' => 'Padding 4'],
      ['pl-5' => 'Padding 5']
    )
    ->setInstructions('Padding left')

  ->addSelect('padding_right', [
    'ui' => $config->ui,
    'wrapper' => $config->wrapper,
    'default_value' => [],
    'allow_null' => 1,
    'placeholder' => 'No padding'
  ])
    ->addChoices(
      ['pr-1' => 'Padding 1'],
      ['pr-2' => 'Padding 2'], 
      ['pr-3' => 'Padding 3'],
      ['pr-4' => 'Padding 4'],
      ['pr-5' => 'Padding 5']
    )
    ->setInstructions('Padding right');

return $padding;      