<?php require_once('../../include/database.php'); ?>
<?php $link=db_connect(); ?>
	<?php
		db_udpdate("UPDATE events SET date='" . $_POST[date] . "', time='" . $_POST[time] . "', description='" . $_POST[description] . "'
					WHERE id='" . $_POST['id'] . "';");
	?>
<?php db_disconnect($link); ?>