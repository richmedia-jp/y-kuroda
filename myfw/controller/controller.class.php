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
    $view = new View($this->route);

  }

}

?>
