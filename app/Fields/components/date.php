<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;

$date = new FieldsBuilder('date');

$date
  ->addDatePicker('date')
    ->setInstructions('Pick up a date');

return $date;