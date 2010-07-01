<?
require_once('../../include/database.php');
$link = db_connect();
$id = $_POST['id'];
$q = "DELETE FROM org_type WHERE id='$id'";
db_update($q);
db_disconnect($link);
header("Location: ..");
?>