<?php require_once('../../include/database.php'); ?>
<?php $link=db_connect(); ?>
<?php db_update("DELETE FROM mailing_list where id='" . $_POST['id'] . "';"); ?>
<?php db_disconnect($link); ?>
Deleted recipient successfully. 