<?php

namespace Wor;

use StoutLogic\AcfBuilder\FieldsBuilder;
use Wor\Fields\Helpers\PrepareList;

$config = (object) [
  'ui' => 1,
  'post_types' => [
    'post', 
    'product', 
    'member', 
    'publication', 
    'survey',
    'event',
    'book'],
  'wrapper' => ['width' => 33],
  'multiple' => 1,
];

$list = new PrepareList();

$posts = new FieldsBuilder('posts');

$posts
  ->addGroup('display_posts')

    ->addSelect('post_type', [
      'ui' => $config->ui,
      'wrapper' => $config->wrapper,
      'multiple' => $config->multiple,
      'default_value' => 'post',
    ])
      ->addChoices($list->post_types($config->post_types))
      ->setInstructions('Post type')

    ->addSelect('categories', [
      'ui' => $config->ui,
      'wrapper' => $config->wrapper,
      'multiple' => $config->multiple,
      'allow_null' => 0,
    ])
      ->addChoices($list->terms('category'))
      ->setInstructions('Filter by categories')

    ->addSelect('tags', [
      'ui' => $config->ui,
      'wrapper' => $config->wrapper,
      'multiple' => $config->multiple,
      'allow_null' => 0,
    ])
      ->addChoices($list->terms('post_tag'))
      ->setInstructions('Filter by tags')

    ->addNumber('count', [
      'wrapper' => $config->wrapper,
      'default_value' => '1',
      'min' => '1',
      'max' => '20'
    ])
      ->setInstructions('Number of posts to display on the page')

    ->addSelect('layout', [
      'wrapper' => $config->wrapper,
      'default_value' => ['grid'],
    ])
      ->addChoices(
        ['grid' => 'Grid'],
        ['slider' => 'Slider'],
        ['carousel' => 'Carousel'],
        ['timeline' => 'Timeline']
      )
      ->setInstructions('A layout to display posts on the page')

    ->addSelect('color_scheme', [
      'wrapper' => $config->wrapper,
      'default_value' => ['dark'],
    ])
      ->addChoices(
        ['is-dark' => 'Dark'],
        ['is-light' => 'Light']
      )
      ->setInstructions('Display in a specific color scheme')
    
  ->endGroup();

return $posts;