<?php require_once('../../include/database.php'); ?>
<?php $link=db_connect(); ?>
<?php
		//db_udpdate("UPDATE mailing_list SET org_name='" . $_POST[org_name] . "', org_type='" . $_POST[org_type] . "', first_name='" . $_POST[first_name] . "', last_name='" . $_POST[last_name] . "', email='" . $_POST[email] . "', zip='" . $_POST[zip] . "'
		//			WHERE id='" . $_POST['id'] . "';");			
		$update_str = " ";
		if($_POST[org_name] != "") { $update_str = $update_str . "org_name='" . $_POST[org_name] . "', "; }
		if($_POST[org_type] != "") { $update_str = $update_str . "org_type='" . $_POST[org_type] . "', "; }
		if($_POST[first_name] != "") { $update_str = $update_str . "first_name='" . $_POST[first_name] . "', "; }
		if($_POST[last_name] != "") { $update_str = $update_str . "last_name='" . $_POST[last_name] . "', "; }
		if($_POST[email] != "") { $update_str = $update_str . "email='" . $_POST[email] . "', "; }
		if($_POST[zip] != "") { $update_str = $update_str . "zip='" . $_POST[zip] . "', "; }
		$update_str = substr(trim($update_str),0,-1);
		if($update_str != "") {
			db_update("UPDATE mailing_list SET " . $update_str . " where id='" . $_POST[id] . "';");
		}
	?>
<?php db_disconnect($link); ?>
<?php header('Location: ../?msg=Update succeeded.'); ?>