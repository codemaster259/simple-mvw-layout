<?php
/*
 * Toda Peticion llega a este archivo
 */

//constantes para includes/requires

define('CORE_ROOT', str_replace("\\","/", dirname(__DIR__).'/'));
define('SYSTEM_ROOT', CORE_ROOT."system/");
define('APP_ROOT', CORE_ROOT."app/");

// Con esto se obtiene la url sin variables $_GET
$request_url = parse_url(rtrim($_SERVER["REQUEST_URI"],'/'), PHP_URL_PATH);

echo $request_url;