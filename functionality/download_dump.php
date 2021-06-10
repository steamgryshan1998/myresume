<?php
require_once 'connection.php';
$import = '/var/www/myresume.com/public_html/storage/dump_db.sql';
$command = 'mysql -h' . $host . ' -u' . $user . ' -p' . $password . ' ' . $database . ' < ' . $import;
exec($command, $output,$worked);
header('location:/index.php');



