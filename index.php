<?php
session_start();

$actions = array('input','input_login');
if(isset($_GET['action'])){
    $action = $_GET['action'];
}   else {
    $action = null;
}

if (in_array($action, $actions)) {
    $action = "functionality/".$action.".php";
    include "$action";
    exit();
}

$allowed = array('registration', 'login', 'input_resume', 'form', 'resume'); // add the page names you need
$page = ( isset($_GET['tab']) ) ? $_GET['tab'] : 'resume';


include "pages/head.php";


include "pages/menu.php";


if ( in_array($page, $allowed) ) {
    $page = "pages/".$page.".php";
    include "$page";
}

include "pages/down.php";


