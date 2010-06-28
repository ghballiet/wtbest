<?php
function setc($name,$value) {
    setcookie($name,$value,time()+3600,'/');
}

$SECRET_KEY="9RatrE9ded9he8";
require_once('../include/database.php');
$link = db_connect();

$email = trim($_POST[email]);
$password = trim($_POST[password]);

if($email == "" || $password == "" ) {
    header('Location: ..');
}

$q = "select * from admin a where a.email='" . $email . "' and a.password=password('" . $password . "');";
$list = db_query($q);
if(sizeof($list)==0) {
    db_disconnect($link);    
    header('Location: ..');
}
// only get here if login is valid
setc($SECRET_KEY,'true');
db_disconnect($link);
header('Location: ../admin_home/');
?>