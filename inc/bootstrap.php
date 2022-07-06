<?php
// define("PROJECT_ROOT_PATH", __DIR__ . "/../");
define("PROJECT_ROOT_PATH",  $_SERVER['DOCUMENT_ROOT']."api");

// include main configuration file
require_once PROJECT_ROOT_PATH . "/inc/config.php";
// require_once "inc/config.php";

// include the base controller file
require_once PROJECT_ROOT_PATH . "/Controller/api/BaseController.php";
// require_once "Controller/Api/BaseController.php";

// include the use model file
// require_once PROJECT_ROOT_PATH . "/Model/UserModel.php";

require_once PROJECT_ROOT_PATH . "/Model/MaquinasModel.php";
// require_once "Model/MaquinasModel.php";

die( var_dump( "After the Model MaquinasMOdel.php ".PROJECT_ROOT_PATH ) );