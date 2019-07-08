<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;

$field = new FieldsBuilder('text');

$field
  ->addText('input')
    ->setInstructions(__('Text Input'));

return $field;