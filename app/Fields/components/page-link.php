<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
  'include_archives' => 0,
  'post_types' => ['page', 'post'],
  'wrapper' => ['width' => 100]
];
$field = new FieldsBuilder('page_link');

$field
  ->addPageLink('page_link', [
                  'allow_archives' => $config->include_archives,
                  'post_type' => $config->post_types,
                  'wrapper' => $config->wrapper
                ])
                ->setInstructions(__('Link to the page'));

return $field;