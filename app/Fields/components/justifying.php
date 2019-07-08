<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
  'ui' => 0,
  'wrapper' => ['width' => 100],
];
$justify = new FieldsBuilder('justify');

$justify
  ->addSelect('justify', [
    'ui' => $config->ui,
    'wrapper' => $config->wrapper,
    'default_value' => [],
    'allow_null' => 1,
    'placeholder' => 'Default'
  ])
    ->addChoices(
      ['justify-content-start' => 'Start'],
      ['justify-content-center' => 'Center'], 
      ['justify-content-end' => 'End'],
      ['justify-content-around' => 'Space around'],
      ['justify-content-between' => 'Space between']
    )
    ->setInstructions('Justify content');

return $justify;