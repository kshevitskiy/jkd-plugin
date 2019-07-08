<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
  'ui' => 0,
  'wrapper' => ['width' => 100],
];
$align = new FieldsBuilder('align');

$align
  ->addSelect('align', [
    'ui' => $config->ui,
    'wrapper' => $config->wrapper,
    'default_value' => [],
    'allow_null' => 1,
    'placeholder' => 'No alignment'
  ])
    ->addChoices(
      ['align-items-start' => 'Top'],
      ['align-items-center' => 'Middle'], 
      ['align-items-end' => 'Bottom']
    )
    ->setInstructions('Align content');

return $align;