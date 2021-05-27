<?php
exec('mysqldump --user=admin --password=password --host=localhost my_db > /var/www/myresume.com/public_html/dump_db.sql');
echo "Dump had been created!";
