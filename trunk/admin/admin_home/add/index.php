<?php require_once('../../include/database.php'); ?>
<?php $link=db_connect(); ?>
	<?php
		db_udpdate("INSERT INTO mailing_list (first_name, last_name, email, org_name, zip, org_type)
			VALUES (0,'" . $_POST[first_name] . "','" . $_POST[last_name] . "','" . $_POST[email] . "','" . $_POST[org_name] . "','" . $_POST[zip] . "','" . $_POST[org_type] . "');");
	?>
<?php db_disconnect($link); ?>