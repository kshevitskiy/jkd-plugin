<?php

namespace Wor\Fields\Helpers;

class Importer {

  /**
   * Simple function to pretty up our field partial includes.
   *
   * @param  mixed $partial
   * @return mixed
   */
  public function get_partial( $partial )
  {
      $partial = str_replace( '.', '/', $partial );
      return include( plugin_dir_path( __DIR__ ) . "/{$partial}.php" );
  }
}