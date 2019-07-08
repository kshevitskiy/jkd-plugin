<?php

namespace Wor\Fields\Page;

use Wor\Fields\Helpers\Importer;
use StoutLogic\AcfBuilder\FieldsBuilder;

$importer = new Importer();
$builder = new FieldsBuilder('sponsors_page_content');
$template = 'views/template-sponsors.blade.php';

$builder
  ->setLocation('page_template', '==', $template);
$builder
  ->addAccordion('sponsors', [
      'label' => __('Sponsors')
    ])
    ->addFields($importer->get_partial('partials.sponsors.sponsor'));

return $builder;