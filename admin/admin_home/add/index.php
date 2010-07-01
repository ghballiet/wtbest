<?php
$org_name = $_POST['org_name'];
$type = $_POST['org_type'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$zip = $_POST['zip'];

require_once('../../include/database.php');
$link = db_connect();
db_update("INSERT INTO mailing_list (id, first_name, last_name, email, org_name, zip, org_type) VALUES (0,'" . $first_name . "','" . $last_name . "','" . $email . "','" . $org_name . "','" . $zip . "','" . $type . "');");
// $q = "SELECT o.name from org_type o where o.id='" . $type . "';";
// $list = db_query($q);
db_disconnect($link);
header('Location: ..');
?>