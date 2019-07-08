<?php

namespace Wor\Fields\Page;

use Wor\Fields\Helpers\Importer;
use StoutLogic\AcfBuilder\FieldsBuilder;

$importer = new Importer();
$builder = new FieldsBuilder('home_page_content');
$template = 'views/template-home.blade.php';

$builder
  ->setLocation('page_template', '==', $template);
$builder
  ->addAccordion('events', [
      'label' => __('Events')
    ])
    ->addFields($importer->get_partial('partials.home.events'))

  ->addAccordion('achievements', [
      'label' => __('Achievements')
    ])
    ->addFields($importer->get_partial('partials.home.achievements'));

return $builder;