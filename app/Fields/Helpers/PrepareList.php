<?php

namespace Wor\Fields\Helpers;

class PrepareList {

  public function post_types( $names = [] )
  {
    $list = [];
    $args = array(
      'public' => true
    );  
    foreach($names as $name) {
      $args['name'] = $name;
      foreach(get_post_types( $args ) as $p) {
        $list[$p] = ucfirst($p);
      }
    }
    return $list;
  }

  public function terms( $term = '' )
  {
    $list = [];
    $args = array(
      'taxonomy' => $term,
      'hide_empty' => false
    );
    foreach(get_terms( $args ) as $t) {
      $list[$t->slug] = $t->name . ' ('. $t->count .')';
    }
    return $list;
  }  
}