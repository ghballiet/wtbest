<?php require_once('../../include/database.php'); ?>
<?php $link=db_connect(); ?>
	<?php
		db_udpdate("UPDATE sponsor SET image='" . $_POST[logo] . "', name='" . $_POST[name] . "', url='" . $_POST[url] . "'
					WHERE id='" . $_POST['id'] . "';");
	?>
<?php db_disconnect($link); ?>