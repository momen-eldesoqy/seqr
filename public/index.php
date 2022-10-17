<?php
namespace PHPMVC ;
use PHPMVC\LIB\AutoLoad;
use PHPMVC\LIB\Database;
use PHPMVC\LIB\FrontController;
require_once '..'. DIRECTORY_SEPARATOR .'app'.DIRECTORY_SEPARATOR. 'config.php';
require_once APP_PATH.DS.'lib'.DS.'autoload.php';

$frontcontroller = new FrontController();
$frontcontroller->dispatch();





