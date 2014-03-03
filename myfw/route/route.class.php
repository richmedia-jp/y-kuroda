<?php

class Route {

  protected $request_uri;
  protected $controller_name;
  protected $action_name;

  public function __construct(){
    $this->request_uri = $_SERVER['REQUEST_URI'];
    $this->ParseRequestUri();
  }

  // if REQUEST_URI is null, set top/index
  public function ParseRequestUri(){
    $uri_arr = explode('/',$this->request_uri);
    $this->controller_name = empty($uri_arr[2]) ? 'top' : $uri_arr[2];
    $this->action_name = empty($uri_arr[3]) ? 'index' : $uri_arr[3];
  }

  public function getControllerName(){
    return $this->controller_name;
  }

  public function getActionName(){
    return $this->action_name;
  }

}

?>