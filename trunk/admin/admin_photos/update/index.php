<?php require_once('../../include/database.php'); ?>
<?php $link=db_connect(); ?>
<?php
$update_str = " ";
if($_POST[photo] != "") { } // TODO: this is gonna be tricky, we should do this part later
if($_POST[caption] != "") { $update_str = $update_str . " caption='" . $_POST[caption] . "', "; }
$update_str = substr(trim($update_str),0,-1); // removing extra ", "

if($update_str != "") {
	db_update("UPDATE photos SET " . $update_str . " where id='" . $_POST['id'] . "';");
}
?>
<?php db_disconnect($link); ?>
<?php header('Location: ../?msg=Update succeeded.'); ?>