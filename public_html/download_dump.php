<?php
require_once 'connection.php';
$import = 'dump_db.sql';
$command = 'mysql -h' . $host . ' -u' . $user . ' -p' . $password . ' ' . $database . ' < ' . $import;
exec($command, $output,$worked);
//var_dump($worked);
if(!($worked)){
    echo 'The data from the file <b>' .$import .'</b> were successfully imported into the database <b>' .$database .'</b>';
}  else {
    echo 'An error occurred during the import. Please check if the file is in the same folder as this script. Also check the following data again:<br/><br/><table><tr><td>MySQL Database Name:</td><td><b>' .$database .'</b></td></tr><tr><td>MySQL User Name:</td><td><b>' .$user .'</b></td></tr><tr><td>MySQL Password:</td><td><b>NOTSHOWN</b></td></tr><tr><td>MySQL Host Name:</td><td><b>' .$host .'</b></td></tr><tr><td>MySQL Import Dateiname:</td><td><b>' .$import .'</b></td></tr></table>';
    exit();
}



