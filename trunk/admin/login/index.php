<?php
function setc($name,$value) {
    setcookie($name,$value,0,'/');
}
$SECRET_KEY="9RatrE9ded9he8";
require_once('../include/database.php');
$link = db_connect();

if(!isset($_POST['email']) || !isset($_POST['password']) || $_POST['email'] == NULL || $_POST['password'] == NULL) {
    header('Location: ..');
}

$email = trim($_POST['email']);
$password = trim($_POST['password']); 

$q = "select * from admin a where a.email='" . $email . "' and a.password=password('" . $password . "');";
$list = db_query($q);
if($list[1]['id']==NULL) {
    db_disconnect($link);
    // header('Location: ..');
}
// only get here if login is valid
setc($SECRET_KEY,'true');
setc('first_name',$list[1]['first_name']);
setc('last_name',$list[1]['last_name']);
db_disconnect($link);
header('Location: ../admin_home/');
?>