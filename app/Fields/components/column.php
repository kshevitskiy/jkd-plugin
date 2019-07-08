<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;
use Wor\Fields\Helpers\Importer;

function columns($columns) {
  $i = 1;
  $options = [];
  for($i; $i <= $columns; $i++) {
    $options['col-xs-12 col-sm-12 col-md-12 col-lg-'. $i .''] = ''. $i .' column';
  }
  return $options;
}

$importer = new Importer();
$config = (object) [
  'ui' => 1,
  'wrapper' => ['width' => 33],
  'columns' => columns(12)
];
$column_keys = array_keys($config->columns);

$column = new FieldsBuilder('column');
$column
  ->addAccordion('column_settings')
    ->addSelect('width', [
      'wrapper' => $config->wrapper,
      'default_value' => end( $column_keys )
      ])
      ->addChoices($config->columns)
      ->setInstructions('Column width.')

    ->addFields($importer->get_partial('components.cover'))
      ->modifyField('background_color', ['wrapper' => $config->wrapper])
      ->modifyField('background_image', ['wrapper' => $config->wrapper])
    ->addFields($importer->get_partial('components.text-align'))
      ->modifyField('text_align', ['wrapper' => $config->wrapper])
    ->addFields($importer->get_partial('components.padding-y'))
      ->modifyField('padding_top', ['wrapper' => $config->wrapper])
      ->modifyField('padding_bottom', ['wrapper' => $config->wrapper])

  ->addAccordion('column_content')
    ->addFlexibleContent('components', [
      'button_label' => 'Add Component'
    ])
      ->addLayout($importer->get_partial('components.label'))
      ->addLayout($importer->get_partial('components.button'))
      ->addLayout($importer->get_partial('partials.group'))
      ->addLayout($importer->get_partial('partials.slider'))
      ->addLayout($importer->get_partial('partials.tabs'))
      ->addLayout($importer->get_partial('partials.reports'))
      ->addLayout($importer->get_partial('partials.payment'))
      ->addLayout($importer->get_partial('partials.banner'))
      ->addLayout($importer->get_partial('components.blockquote'))
      ->addLayout($importer->get_partial('components.posts'));      

return $column;