<?php

namespace Wor\Models;

use CPT;

class Event {
  
  public function __construct() {
    $this->model = new CPT('event', [
      'supports'     => ['title', 'editor', 'thumbnail'],
      'show_in_rest' => true,
      'rest_base'    => 'events'
    ]);
    $this->appearance();
  }

  private function appearance() {
    $this->model->menu_icon('dashicons-calendar-alt');
  }
}