<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;

$input = new FieldsBuilder('text');

$input
  ->addText('id', [
    'label' => 'ID'
  ])
    ->setInstructions('Set ID');

return $input;