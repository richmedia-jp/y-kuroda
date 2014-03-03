<?php

class View {

  public $route;
  private $val_arr;

  public function __construct($route){
    $this->route = $route;
  }

  public function renderView(){
    foreach($this->val_arr as $key => $val){
      if (!is_object($val) && !is_array($val)){
        $$key = $val;
      }
    }
    include_once(APP_DIR.'view/layout/default.php');
  }

  public function loadContent(){
    $view_file = $this->route->getActionName().'.php';
    include_once(APP_DIR.'view/'.$this->route->getControllerName().'/'.$view_file);
  }

  public function setVals(array $val_arr){
    $this->val_arr = $val_arr;
  }

}

?>