<?php

class Example extends Controller {

  public function args() {
    
    $args = func_get_args();
    require APP . 'view/example/args.php';
  }

  public function vars() {
    
    $vars = get_defined_vars();
    $consts = get_defined_constants();
    require APP . 'view/example/vars.php';
  }

}