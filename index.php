<?php

define('PROJECT_DIR',__DIR__);
define('APP_DIR',__DIR__.'/app/');

include_once(PROJECT_DIR.'/myfw/route/route.class.php');
include_once(PROJECT_DIR.'/myfw/controller/controller.class.php');
// include_once(PROJECT_DIR.'/myfw/view/view.class.php');

$route = new Route();

// controller
$controller_class_name = $route->getControllerName().'_controller';
$controller_class_file_path = APP_DIR.'controller/'.$controller_class_name.'.class.php';
include_once($controller_class_file_path);
$controller_class = new $controller_class_name($route);

// execute action
$controller_class->executeAction();

// view
$controller_class->executeView();

?>
