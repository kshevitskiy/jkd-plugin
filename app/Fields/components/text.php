<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
  'media' => 1,
  'toolbar' => 'full'  
];
$text = new FieldsBuilder('text_block');

$text
  ->addGroup('text_editor')
    ->addWysiwyg('editor', [
        'media_upload' => $config->media,
        'toolbar' => $config->toolbar,
    ])
    ->setInstructions('Content editor')
  ->endGroup();

return $text;