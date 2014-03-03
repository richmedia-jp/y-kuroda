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
    $view->setVals($this->getVals());
    $view->renderView();
  }

  private function getVals(){
    $val_arr = array();

    foreach($this as $key => $val){
      if(!is_object($val) && !is_array($val)){
        $val_arr[$key] = $val;
      }
    }
    return $val_arr;
  }

}

?>
