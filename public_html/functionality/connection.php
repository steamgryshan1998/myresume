<?php
$l = mysqli_connect('localhost', 'admin', 'password', 'my_db');
if (!$l) {
    die('error connect to db');
}
return $l;