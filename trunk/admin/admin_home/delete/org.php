<?php
//<!-- admin_home/delete/org.php : is called by admin_home to process query to delete an organization from the database. -->
require_once('../../include/database.php');
$link = db_connect();
$id = $_POST['id'];
$q = "DELETE FROM org_type WHERE id='$id'";
db_update($q);
db_disconnect($link);
header('Location: ../?msg=Update succeeded.'); 
?>