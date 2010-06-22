<?php
require_once('../php/database.php');
$link=db_connect();
$id = $_GET['i'];
if($id == '') {
    die('');
}
$q = "select s.image from sponsor s where s.id='" . $id . "';";
$list = db_query($q);
header('Content-type: image');
foreach($list as $l) {
    print $l['image'];
}
db_disconnect($link);
?>