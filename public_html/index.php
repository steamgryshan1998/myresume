<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="menu.css">
</head>
<body>
<?php
include "menu.php";
/*$t = $_GET['tab'];
$page = $t.".php";
if(file_exists($page)){
    include "$t.php";
}*/

$allowed = array('registration', 'login', 'input_resume', 'form', 'resume'); // add the page names you need
$page = ( isset($_GET['tab']) ) ? $_GET['tab'] : 'resume';
if ( in_array($page, $allowed) ) {
    include("$page.php");
}
?>
</body>
</html>