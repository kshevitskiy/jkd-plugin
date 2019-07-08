<?php

namespace Wor\Fields\Post;

use Wor\Fields\Helpers\Importer;
use StoutLogic\AcfBuilder\FieldsBuilder;

$importer = new Importer();
$config = (object) [
  'wrapper' => ['width' => 33],
];
$builder = new FieldsBuilder('event_details');

$builder
  ->setLocation('post_type', '==', 'event');
  
$builder
  ->addFields($importer->get_partial('partials.post.event'));

return $builder;