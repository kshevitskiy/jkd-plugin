<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;

$file = new FieldsBuilder('file');

$file
  ->addFile('file', [
    'return_format' => 'url',
  ])
    ->setInstructions('Attach file');

return $file;