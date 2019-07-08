<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;
use Wor\Fields\Helpers\Importer;

$importer = new Importer();
$config = (object) [
  'wrapper' => ['width' => 50],
];

$slide = new FieldsBuilder('slide');

$slide
  ->addGroup('slide')
    ->addFields($importer->get_partial('components.cover'))
    ->addFields($importer->get_partial('components.label'))
    ->addFields($importer->get_partial('components.text'))          
    ->addFields($importer->get_partial('components.button'))
  ->endGroup();

return $slide;