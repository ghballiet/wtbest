<?php require_once('../../include/database.php'); 
//<!-- admin/admin_sponsors/update/index.php :  is called from admin/admin_sponsors/edit/index to query a 
//	sponsor to edit it in the database. -->
?>
<?php $link=db_connect(); ?>
<?php					
	$update_str = " ";
	if($_POST[image] != "") { } // TODO: this is gonna be tricky, we should do this part later
	if($_POST[name] != "") { $update_str = $update_str . " name='" . $_POST[name] . "', "; }
	if($_POST[url] != "") { $update_str = $update_str . "url='" . $_POST[url] . "', "; }
	$update_str = substr(trim($update_str),0,-1); // removing extra ", "
    
	if($update_str != "") {
		db_update("UPDATE sponsor SET " . $update_str . " where id='" . $_POST['id'] . "';");
	}			
?>
<?php db_disconnect($link); ?>
<?php header('Location: ../?msg=Update succeeded.'); ?>