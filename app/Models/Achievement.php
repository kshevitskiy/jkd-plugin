<?php

namespace Wor\Models;

use CPT;

class Achievement {
  
  public function __construct() {
    $this->model = new CPT('achievement', [
      'supports'     => ['title', 'editor', 'thumbnail'],
      // 'show_in_rest' => true
    ]);
    $this->appearance();
  }

  private function appearance() {
    $this->model->menu_icon('dashicons-awards');
  }
}