<?php require_once('../../include/database.php'); 
//<!-- admin/admin_home/edit/update_org.php : is called by admin_home/edit to process query to edit organization
//	in the database. -->
?>
<?php $link=db_connect(); ?>
<?php
	$update_str = " ";
	if($_POST[name] != "") { $update_str = $update_str . "name='" . $_POST[name] . "', "; }
	$update_str = substr(trim($update_str),0,-1);
	if($update_str != "") {
		db_update("UPDATE org_type SET " . $update_str . " where id='" . $_POST[id] . "';");
		}
//	$id=$_POST['id'];
//	$name=$_POST['name']; 
//	$q = "UPDATE org_type SET name='$name'  WHERE id='$id'"; 
//	db_update($q); 
 ?>
<?php db_disconnect($link); ?>
<?php header('Location: ../?msg=Update succeeded.'); ?>
