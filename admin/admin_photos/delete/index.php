<?php require_once('../../include/database.php'); ?>
<?php $link=db_connect();
db_update("DELETE FROM photos where id='" . $_POST['id'] . "';");
?>
<?php db_disconnect($link);
header("Location: .."); ?>