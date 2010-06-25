<?php require_once('../../include/database.php'); ?>
<?php $link=db_connect(); ?>
	<?php
		db_udpdate("INSERT INTO sponsor (image, name, url)
			VALUES (0,'" . $_POST[logo] . "','" . $_POST[name] . "','" . $_POST[url] . "');");
	?>
<?php db_disconnect($link); ?>