<?php
exec('mysqldump --user=admin --password=password --host=localhost my_db > /var/www/myresume.com/public_html/storaqe/dump_db.sql');
header('location:/index.php');
//echo "Dump had been created!";
