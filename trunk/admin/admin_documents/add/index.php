<?php require_once('../../include/database.php'); ?>
<?php $link=db_connect(); ?>
	<?php
		db_udpdate("INSERT INTO documents (id,title, description, browse)
			VALUES (0,'" . $_POST[title] . "','" . $_POST[description] . "','" . $_POST[document] . "');");
	?>
<?php db_disconnect($link); ?>