<?php

define('PROJECT_DIR',__DIR__);
define('APP_DIR',__DIR__.'/app/');
define('FW_DIR',__DIR__.'/myfw/');

include_once(FW_DIR.'dispatcher.php');
include_once(FW_DIR.'ClassLoader.php');

$dispatcher = new Dispatcher();
$dispatcher->dispatch();

$classLoader = new ClassLoader();
$classLoader->registerDir(APP_DIR . 'model');

?>
