<?php require_once('../../include/database.php'); ?>
<?php $link=db_connect(); ?>
	 <?php
		db_udpdate("INSERT INTO events (date, time, description)
			VALUES (0,'" . $_POST[e.date] . "','" . $_POST[e.time] . "','" . $_POST[description] . "');");
	?>
<?php db_disconnect($link); ?>