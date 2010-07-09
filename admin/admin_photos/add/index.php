<?php require_once('../../include/database.php'); ?>
<?php $link=db_connect(); ?>
<?php
if(isset($_POST['caption']) && $_FILES['photo']['size'] > 0) {
    $filename = $_FILES['photo']['filename'];
    $tmpname = $_FILES['photo']['tmp_name'];
    $size = $_FILES['photo']['size'];
    $type = $_FILES['photo']['type'];
    
    $fp = fopen($tmpname,'r');
    $content = fread($fp,filesize($tmpname));
    $content = addslashes($content);
    fclose($fp);
    
    $caption = addslashes($_POST['caption']);
    $q = "INSERT INTO photos VALUES (0,'$content','$caption');";
    db_update($q);
    
    header('Location: ../?msg=Update succeeded.');
}
?>
<?php db_disconnect($link); ?>