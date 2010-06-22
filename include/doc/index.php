<?php
require_once('../php/database.php');
$link=db_connect();
$id = $_GET['i'];
if($id == '') {
    die('');
}
$q = "select d.document, d.title from documents d where d.id='" . $id . "';";
$list = db_query($q);
header('Content-type: application/pdf');
foreach($list as $l) {
    header('Content-Disposition: inline; filename="' . $l['title'] . '.pdf"');
    print $l['document'];
}
db_disconnect($link);
?>