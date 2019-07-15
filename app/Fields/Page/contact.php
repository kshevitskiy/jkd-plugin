<?php

namespace Wor\Fields\Page;

use Wor\Fields\Helpers\Importer;
use StoutLogic\AcfBuilder\FieldsBuilder;

$importer = new Importer();
$builder = new FieldsBuilder('contact_page_content');
$template = 'views/template-contact.blade.php';

$builder
  ->setLocation('page_template', '==', $template);
$builder
  ->addAccordion('contact_person', [
      'label' => __('Contact Person')
    ])
    ->addFields($importer->get_partial('partials.media.contact-person'))

  ->addAccordion('contact_form', [
      'label' => __('Contact Form')
    ])
    ->addFields($importer->get_partial('partials.media.contact-form'));

return $builder;