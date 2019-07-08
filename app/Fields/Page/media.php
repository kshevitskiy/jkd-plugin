<?php

namespace Wor\Fields\Page;

use Wor\Fields\Helpers\Importer;
use StoutLogic\AcfBuilder\FieldsBuilder;

$importer = new Importer();
$builder = new FieldsBuilder('media_page_content');
$template = 'views/template-media.blade.php';

$builder
  ->setLocation('page_template', '==', $template);
$builder
  ->addAccordion('docs', [
      'label' => __('Documents')
    ])
    ->addFields($importer->get_partial('partials.media.docs'))

  ->addAccordion('gallery', [
      'label' => __('Gallery')
    ])
    ->addFields($importer->get_partial('partials.media.gallery'))

  ->addAccordion('press_pack', [
      'label' => __('Press Pack')
    ])
    ->addFields($importer->get_partial('partials.media.press-pack'))

  ->addAccordion('contact_person', [
      'label' => __('Contact Person')
    ])
    ->addFields($importer->get_partial('partials.media.contact-person'))

  ->addAccordion('contact_form', [
      'label' => __('Contact Form')
    ])
    ->addFields($importer->get_partial('partials.media.contact-form'));

return $builder;