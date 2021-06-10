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

/*switch ($page) {
    case 'login':
        $mainTitle = 'LOGIN FORM';
        break;
    case 'resume':
        $mainTitle = 'RESUME';
        break;
    case 'form':
        $mainTitle = 'FORM';
        break;
    case 'registration':
        $mainTitle = 'REGISTRATION FORM';
        break;
    case 'input_resume':
        $mainTitle = 'EDITABLE RESUME';
        break;
    default:
        $mainTitle = 'INDEX';
        break;
}*/
include "pages/head.php";


include "pages/menu.php";


if ( in_array($page, $allowed) ) {
    $page = "pages/".$page.".php";
    include "$page";
}

include "pages/down.php";


