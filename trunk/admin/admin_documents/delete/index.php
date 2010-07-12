<?php require_once('../../include/database.php'); 
//<!-- admin_documents/delete/index.php : is called by admin_documents/index.php to give user form to delete a document. -->?>
<?php $link=db_connect(); ?>
<?php db_update("DELETE FROM documents where id='" . $_POST['id'] . "';"); ?>
<?php db_disconnect($link); ?>
<?php header('Location: ../?msg=Update succeeded.'); ?>