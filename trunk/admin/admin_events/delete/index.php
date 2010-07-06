<?php
require_once('../../include/database.php');
$link=db_connect();
//$q = "SELECT * FROM events e WHERE id='" . $_POST['id'] . "';";
//$list = db_query($q);
db_update("DELETE FROM events WHERE id='" . $_POST['id'] . "';");
//$date = date_format(date_create($list[1][date]),"l F j Y");
//$time = date_format(date_create($list[1][time]),"h:iA");
//echo "Deleted event on " . $date . " at " . $time . ".";
db_disconnect($link);
?>
<?php header('Location: ../?msg=Update succeeded.'); ?>