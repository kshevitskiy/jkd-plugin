<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
  'media' => 0,
  'toolbar' => 'full'  
];
$blockquote = new FieldsBuilder('blockquote');

$blockquote
  ->addGroup('blockquote')
    ->addWysiwyg('text', [
        'required' => 1,
        'media_upload' => $config->media,
        'toolbar' => $config->toolbar,
    ])
    ->setInstructions('Blockquote text')
  ->endGroup();

return $blockquote;