<?php
require __DIR__ . "/inc/bootstrap.php";
// require "inc/bootstrap.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );
 
if ((isset($uri[3]) && $uri[3] != 'maquinas') || !isset($uri[4])) {
    header("HTTP/1.1 404 Not Found");
    exit();
}

die( var_dump( $uri ) );

require PROJECT_ROOT_PATH . "/Controller/Api/MaquinasController.php";

$objFeedController = new MaquinasController();
$strMethodName = $uri[4];
$objFeedController->{$strMethodName}();
