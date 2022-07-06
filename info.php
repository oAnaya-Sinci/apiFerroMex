<?php

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );

die( var_dump( $uri ) );

// Print the informatrion of PHP
echo phpinfo();