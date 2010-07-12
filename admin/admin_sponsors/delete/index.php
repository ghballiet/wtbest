<?php require_once('../../include/database.php'); 
//<!-- admin/admin_sponsors/delete/index.php :  is called from admin/admin_sponsors/index to delete a sponsor from the database. -->
?>
<?php $link=db_connect(); ?>
<?php db_update("DELETE FROM sponsor where id='" . $_POST['id'] . "';"); ?>
<?php db_disconnect($link); ?>
<?php header('Location: ../?msg=Update succeeded.'); ?>