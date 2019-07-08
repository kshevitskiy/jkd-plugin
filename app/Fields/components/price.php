<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;

$price = new FieldsBuilder('price');

$price
  ->addNumber('price', [
    'min' => '0'
  ])
    ->setInstructions('Product price');

return $price;