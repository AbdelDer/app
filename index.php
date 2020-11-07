<?php

session_start();

include_once 'config/init.php';

if(isset($_POST['xms'])) {
    $template = new Template('templates/xms.php');
    if($_POST['xms'] == 'matin') {
        $template->title = "XMS MATIN";
    } else if($_POST['xms'] == 'soir') {
        $template->title = "XMS SOIR";
    }
} else if(isset($_POST['mv'])) {
    $template = new Template('templates/mv.php');
    if($_POST['mv'] == 'matin') {
        $template->title = "MV MATIN";
    } else if($_POST['mv'] == 'soir') {
        $template->title = "MV SOIR";
    }
}else {
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        $template = new Template('templates/home.php');
    } else {
        $template = new Template('templates/login.php');
    }
}

$xms = new Xms();

echo $template;

?>