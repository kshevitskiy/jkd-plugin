<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;

$url = new FieldsBuilder('url');

$url
  ->addUrl('url')
    ->setInstructions(__('URL'));

return $url;