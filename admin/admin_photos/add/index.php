<?php require_once('../../include/database.php'); ?>
<?php $link=db_connect(); ?>
	<?php
		db_udpdate("INSERT INTO photos (photo,caption)
			VALUES (0,'" . $_POST[photo] . "','" . $_POST[caption] . "');");
	?>
<?php db_disconnect($link); ?>