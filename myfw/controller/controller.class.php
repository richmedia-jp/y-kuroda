<?php

class controller {

  private $route;

  public function __construct($route){
    $this->route = $route;
  }

  public function executeAction(){
    $this->{$this->route->getActionName()}();
  }

  public function executeView(){
    $view_file = $this->route->getActionName().'.php';
    $view_file_path = APP_DIR.'view/'.$this->route->getControllerName().'/'.$view_file;

    $test = "hello test";
    include_once($view_file_path);
  }
}

?>
