<?php
//<!-- wtbest/admin/admin_home/add/index.php : is called by wtbest/admin/admin_home/index.php to add user to mailing_list. -->
$org_name = addslashes($_POST['org_name']);
$type = addslashes($_POST['org_type']);
$first_name = addslashes($_POST['first_name']);
$last_name = addslashes($_POST['last_name']);
$email = addslashes($_POST['email']);
$zip = addslashes($_POST['zip']);

require_once('../../include/database.php');
$link = db_connect();
db_update("INSERT INTO mailing_list (id, first_name, last_name, email, org_name, zip, org_type) VALUES (0,'" . $first_name . "','" . $last_name . "','" . $email . "','" . $org_name . "','" . $zip . "','" . $type . "');");
// $q = "SELECT o.name from org_type o where o.id='" . $type . "';";
// $list = db_query($q);
db_disconnect($link);
header('Location: ../?msg=Update succeeded.'); 
?>