<?php require_once('../../include/database.php'); ?>
<?php $link=db_connect(); ?>
<?php
    $update_str = " ";
    if($_POST[date] != "") { $update_str = $update_str . "date='" . $_POST[date] . "', "; }
    if($_POST[description] != "") { $update_str = $update_str . " description='" . $_POST[description] . "', "; }
    if($_POST[time] != "") { $update_str = $update_str . " time='" . $_POST[time] . "', "; } // TODO: this is gonna be tricky, we should do this part later
    $update_str = substr(trim($update_str),0,-1); // removing extra ", "
    // db_udpdate("UPDATE documents SET title='" . $_POST[title] . "', description='" . $_POST[description] . "', document='" . $_POST[file] . "'
    // WHERE id='" . $_POST['id'] . "';");
    if($update_str != "") {
        db_update("UPDATE events SET " . $update_str . " where id='" . $_POST[id] . "';");
    }
?>
<?php db_disconnect($link); ?>
<?php header('Location: ../?msg=Update succeeded.'); ?>