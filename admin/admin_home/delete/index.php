<?php require_once('../../include/database.php'); 
//<!-- admin_home/delete/index.php : is called by admin_home/index to process query to delete a person from 
//the mailing_list in the database. -->?>
<?php $link=db_connect(); ?>
<?php db_update("DELETE FROM mailing_list where id='" . $_POST['id'] . "';"); ?>
<?php db_disconnect($link); ?>
<?php header('Location: ../?msg=Update succeeded.'); ?>