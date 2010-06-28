<?php
require_once('../include/php/database.php');
$link=db_connect();
$id = $_GET['i'];
if($id == '') {
    die('');
}
header('Content-type: image');
$q = "select p.photo from photos p where p.id='" . $id . "';";
$list = db_query($q);
foreach($list as $l) {
    print $l['photo'];
}
db_disconnect($link);
?>