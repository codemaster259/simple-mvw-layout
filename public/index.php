<?php
/*
 * Toda Peticion llega a este archivo
 */

/*
 * Constantes
 */
define('DOC_ROOT', $_SERVER["DOCUMENT_ROOT"]);

define('CORE_ROOT', str_replace("\\","/", dirname(__DIR__).'/'));
define('SYSTEM_ROOT', CORE_ROOT."system/");
define('APP_ROOT', CORE_ROOT."app/");


define('REQUEST_URI', parse_url(rtrim($_SERVER["REQUEST_URI"],'/'), PHP_URL_PATH));
define('HTTP_ROOT', (isset($_SERVER['HTTPS']) ? 'https' : 'http') . "://".$_SERVER['HTTP_HOST']."/");

echo "'DOCUMENT_ROOT' apunta a la carpeta del proyecto (virtualhost o servidor)<br><br>";

echo "<b>DOC_ROOT:</b> ".DOC_ROOT." (raiz original)<br>";

echo "<b>CORE_ROOT:</b> ".CORE_ROOT." (para includes/requires del proyecto)<br>";

echo "<b>REQUEST_URI:</b> ".REQUEST_URI." (para enrutar sin variables _GET)<br>";

echo "<b>HTTP_ROOT:</b> ".HTTP_ROOT." (html -> base href='HTTP_ROOT')<br>";