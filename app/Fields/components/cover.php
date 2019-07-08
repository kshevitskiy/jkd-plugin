<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
  'ui' => 1,
  'wrapper' => ['width' => 33],
];
$cover = new FieldsBuilder('cover');

$cover
  ->addImage('background_image', [
    'return_format' => 'url',
    'wrapper' => $config->wrapper
    ])
    ->setInstructions('Cover background image')

  ->addColorPicker('background_color', [
    'wrapper' => $config->wrapper
    ])
    ->setInstructions('Cover background color');

return $cover;