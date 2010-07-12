<?php require_once('../../include/database.php'); 
//<!-- admin_documents/update/index.php : is called by admin_documents/edit/index.php to perform the query to edit a document's 
//	title and description. -->?>
<?php $link=db_connect(); ?>
<?php
    $update_str = " ";
    if($_POST[title] != "") { $update_str = $update_str . "title='" . $_POST[title] . "', "; }
    if($_POST[description] != "") { $update_str = $update_str . " description='" . $_POST[description] . "', "; }
    if($_POST[file] != "") { } // TODO: this is gonna be tricky, we should do this part later
    $update_str = substr(trim($update_str),0,-1); // removing extra ", "
    // db_udpdate("UPDATE documents SET title='" . $_POST[title] . "', description='" . $_POST[description] . "', document='" . $_POST[file] . "'
    // WHERE id='" . $_POST['id'] . "';");
    if($update_str != "") {
        db_update("UPDATE documents SET " . $update_str . " where id='" . $_POST[id] . "';");
    }
?>
<?php db_disconnect($link); ?>
<?php header('Location: ../?msg=Update succeeded.'); ?>