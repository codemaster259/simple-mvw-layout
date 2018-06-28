<?php

//ejemplo de config

$config = array();

$config["variable"] = 25;

return $config;

/*
 * Uso:
 * 
 * en index.php
 * 
 * $config = include APP_ROOT."config/config.php";
 * 
 * echo $config["variable"];
 * 
 * > 25
 */