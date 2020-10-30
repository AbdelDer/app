<?php

session_start();

include_once 'config/init.php';

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $template = new Template('templates/home.php');
} else {
    $template = new Template('templates/login.php');
}

$xms = new Xms();

echo $template;

?>