<?php require_once('../../include/database.php'); ?>
<?php $link=db_connect(); ?>
	<?php
		db_udpdate("UPDATE documents SET title='" . $_POST[title] . "', description='" . $_POST[description] . "', document='" . $_POST[file] . "'
					WHERE id='" . $_POST['id'] . "';");
	?>
<?php db_disconnect($link); ?>