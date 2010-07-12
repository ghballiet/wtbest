<?php
//<!-- admin_home/add_org/index.php : is called by admin_home/index to process query to add a new 
//organization to the database.-->
require_once('../../include/database.php');
$link = db_connect();
$type = $_POST['type'];
$q = "INSERT INTO org_type VALUES (0,'$type');";
db_update($q);
db_disconnect($link);
header('Location: ../?msg=Update succeeded.'); 
?>