<?php require_once('../../include/database.php'); ?>
<?php $link=db_connect(); ?>
<?php
if(isset($_POST['name']) && $_FILES['logo']['size'] > 0) {
    $filename = $_FILES['logo']['filename'];
    $tmpname = $_FILES['logo']['tmp_name'];
    $size = $_FILES['logo']['size'];
    $type = $_FILES['logo']['type'];
    
    $fp = fopen($tmpname,'r');
    $content = fread($fp,filesize($tmpname));
    $content = addslashes($content);
    fclose($fp);
    
    $name = addslashes($_POST['name']);
    $url = addslashes($_POST['url']);
    $q = "INSERT INTO sponsor VALUES (0,'$content','$name','$url');";
    db_update($q);
    
    header('Location: ..');
}
?>
<?php db_disconnect($link); ?>