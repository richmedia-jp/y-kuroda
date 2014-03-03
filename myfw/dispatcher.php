<?php

include_once(FW_DIR.'route/route.class.php');
include_once(FW_DIR.'controller/controller.class.php');
include_once(FW_DIR.'view/view.class.php');

class Dispatcher {

  public function __construct(){
  }

  public function dispatch(){
    $route = new Route();

    $controller_class_name = $route->getControllerName().'_controller';
    require_once APP_DIR.'controller/'.$controller_class_name.'.class.php';

    $controller_instance = new $controller_class_name($route);
    $controller_instance->executeAction();
    $controller_instance->executeView();
  }

}


?>