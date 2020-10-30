<?php

//Config
require_once 'config.php';

//AutoLoader
function __autoload($class_name) {
    require_once 'lib/'.$class_name.'.php'; 
}

?>