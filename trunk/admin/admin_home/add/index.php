<?php require_once('../../include/database.php'); ?>
<?php $link=db_connect(); ?>
<?php
$q = "select * from mailing_list m where m.id='" . $_POST[id] . "'order by m.org_name, m.first_name, m.last_name, m.email;";
$list = db_query($q);
echo $list[1][org_name] . ': ' . $list[1][last_name] . ', ' . $list[1][first_name];
// db_udpdate("INSERT INTO mailing_list (first_name, last_name, email, org_name, zip, org_type) VALUES (0,'" . $_POST[first_name] . "','" . $_POST[last_name] . "','" . $_POST[email] . "','" . $_POST[org_name] . "','" . $_POST[zip] . "','" . $_POST[org_type] . "');");
?>
<?php db_disconnect($link); ?>