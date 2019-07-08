<?php

namespace Wor\Fields\Page;

use Wor\Fields\Helpers\Importer;
use StoutLogic\AcfBuilder\FieldsBuilder;

$importer = new Importer();
$builder = new FieldsBuilder('bio_page_content');
$template = 'views/template-bio.blade.php';

$builder
  ->setLocation('page_template', '==', $template);
$builder
  ->addAccordion('details', [
      'label' => __('Details')
    ])
    ->addFields($importer->get_partial('partials.bio.details'));

return $builder;