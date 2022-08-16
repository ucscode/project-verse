<?php 

define("ROOT_DIR", str_replace("\\", "/", __DIR__));

require ROOT_DIR . '/els-config.php';
require ROOT_DIR . '/els-vars.php';
require ROOT_DIR . '/els-load.php';

Temp::output();


