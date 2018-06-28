<?php

//ejemplo de config

$config = array();

$config["c"] = 25;

return $config;

/*
 * Uso:
 * 
 * en index.php
 * 
 * $config = include APP_ROOT."config/config.php";
 * 
 * echo $config["HTTP_ROOT"];
 * 
 * > 25
 */