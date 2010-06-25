<?php require_once('../../include/database.php'); ?>
<?php $link=db_connect(); ?>
	<?php
		db_udpdate("UPDATE mailing_list SET org_name='" . $_POST[org_name] . "', org_type='" . $_POST[org_type] . "', first_name='" . $_POST[first_name] . "', last_name='" . $_POST[last_name] . "', email='" . $_POST[email] . "', zip='" . $_POST[zip] . "'
					WHERE id='" . $_POST['id'] . "';");
	?>
<?php db_disconnect($link); ?>