<?php
$SECRET_KEY="9RatrE9ded9he8";
setcookie($SECRET_KEY,'',1,'/');
setcookie('first_name','',1,'/');
setcookie('last_name','',1,'/');
header('Location: ../..');
?>