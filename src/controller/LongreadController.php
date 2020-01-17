<?php
require_once __DIR__ . '/Controller.php';

class LongreadController extends Controller {

  public function longread() {

    $this->set('title', 'longread');
  }
}
