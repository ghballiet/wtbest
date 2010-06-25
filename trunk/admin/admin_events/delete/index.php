<?php require_once('../../include/database.php'); ?>
<?php $link=db_connect(); ?>

	<?php
		db_udpdate("DELETE FROM events where id='" . $_POST['id'] . "';");
	?>

<?php db_disconnect($link); ?>