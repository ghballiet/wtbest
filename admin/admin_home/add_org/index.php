<?php
require_once('../../include/database.php');
$link = db_connect();
$type = $_POST['type'];
$q = "INSERT INTO org_type VALUES (0,'$type');";
db_update($q);
db_disconnect($link);
header("Location: ..");
?>