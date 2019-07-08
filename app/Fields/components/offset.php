<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
  'ui' => 0,
  'wrapper' => ['width' => 16.666]
];
$offset = new FieldsBuilder('offset');

$offset
  ->addSelect('offset', [
    'ui' => $config->ui,
    'wrapper' => $config->wrapper,
    'default_value' => [],
    'allow_null' => 1,
    'placeholder' => 'No offset'
  ])
    ->addChoices(
      ['mb-1' => 'Offset 1'],
      ['mb-2' => 'Offset 2'], 
      ['mb-3' => 'Offset 3'],
      ['mb-4' => 'Offset 4'],
      ['mb-5' => 'Offset 5']
    )
    ->setInstructions('Offset bottom');

return $offset;