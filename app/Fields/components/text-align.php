<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
  'ui' => 0
];
$align = new FieldsBuilder('align');

$align
  ->addSelect('text_align', [
    'ui' => $config->ui,
    'default_value' => [],
    'allow_null' => 1,
    'placeholder' => 'Default'
  ])
    ->addChoices(
      ['text-left' => 'Left'],
      ['text-center' => 'Center'], 
      ['text-right' => 'Right']
    )
    ->setInstructions('Text align');

return $align;