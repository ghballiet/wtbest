<?php require_once('../../include/database.php'); 
//<!-- admin/admin_photos/delete/index.php : is called by admin_photos/index.php to query database to delete chosen
//	photo from database-->?>
<?php $link=db_connect(); ?>
<?php db_update("DELETE FROM photos where id='" . $_POST['id'] . "';"); ?>
<?php db_disconnect($link); ?>
<?php header('Location: ../?msg=Update succeeded.'); ?>