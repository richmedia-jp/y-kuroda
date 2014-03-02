<?php

class View {

  public $route;

  public function __construct($route){
    $this->route = $route;

    // thisなしでもcontrollerの変数にアクセスできる
    /* foreach($this as $key => $val){ */
    /*   if(!is_object($val) && !is_array($val)){ */
    /*     $$key = $val; */
    /*   } */
    /* } */

    include_once(APP_DIR.'view/layout/default.php');
  }

  public function useLayout(){

  }

  public function loadContent(){
    $view_file = $this->route->getActionName().'.php';
    include_once(APP_DIR.'view/'.$this->route->getControllerName().'/'.$view_file);
  }

}

?>