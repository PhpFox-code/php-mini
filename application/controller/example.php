<?php

class Example extends Controller {

  public function args() {
    
    $args = func_get_args();
    require APP . 'view/example/args.php';
  }

}