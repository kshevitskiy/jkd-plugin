<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 33],
];

$button = new FieldsBuilder('button');

$button
    ->addGroup('button')

        ->addText('label', [
            'wrapper' => $config->wrapper
            ])
            ->setInstructions('Label shown on the button.')    

        ->addSelect('style', [
            'ui' => $config->ui,
            'wrapper' => $config->wrapper,
            'default_value' => ['btn-default']
            ])
            ->addChoices(
                ['btn-primary' => 'Primary'], 
                ['btn-secondary' => 'Secondary'], 
                ['btn-default' => 'Default']
            )
            ->setInstructions('The background color of the button.')

        ->addGroup('url', [
            'wrapper' => $config->wrapper,
            ])
            ->addTrueFalse('set_url', [
                    'label' => 'Add URL',
                    'ui' => $config->ui,
                    'default_value' => 0
                ])
                ->setInstructions('Add custom URL')

            ->addPageLink('page', [
                    'allow_archives' => 0,
                    'post_type' => ['page', 'post'],
                ])
                ->conditional('set_url', '==', '0')
                ->setInstructions('Page for the button to link to')

            ->addUrl('url', [
                    'label' => 'URL'
                ])
                ->conditional('set_url', '==', '1')
                ->setInstructions('URL for the button to link to')

            ->addTrueFalse('target', [
                    'ui' => $config->ui,
                    'label' => 'New window',
                    'default_value' => 0
                ])
                ->conditional('set_url', '==', '1')
                ->setInstructions('Open link in new window')                
        ->endGroup()
  
    ->endGroup();

return $button;