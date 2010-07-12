<?php require_once('../../include/database.php'); ?>
<?php $link=db_connect(); ?>
<?php
if(isset($_POST['title']) && $_FILES['doc']['size'] > 0) {
    $filename = $_FILES['doc']['filename'];
    $tmpname = $_FILES['doc']['tmp_name'];
    $size = $_FILES['doc']['size'];
    $type = $_FILES['doc']['type'];
    
    $fp = fopen($tmpname,'r');
    $content = fread($fp,filesize($tmpname));
    $content = addslashes($content);
    fclose($fp);
    
    $title = addslashes($_POST['title']);
    $description = addslashes($_POST['description']);
    
    $q = "INSERT INTO documents VALUES (0,'$title','$description','$content');";
    db_update($q);
}
?>
<?php db_disconnect($link); ?>
<?php header('Location: ../?msg=Update succeeded.');?>