<?php
$SECRET_KEY="9RatrE9ded9he8";
if(!isset($_COOKIE[$SECRET_KEY])) {
    header('Location: ../'); 
}?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php require_once('database.php'); ?>
<?php $link=db_connect(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo $_POST['extradirs']; ?>../../include/css/reset.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_POST['extradirs']; ?>../include/master.css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="<?php echo $_POST['extradirs']; ?>../include/funcs.js"></script>
        <title><?php echo $_POST['title']; ?> | West Texas BEST Administration</title>
    </head>
    <body>
        <div id="wrapper">
            <div id="top">
                <h1><?php echo $_POST['title']; ?></h1>
                <img src="<?php echo $_POST['extradirs']; ?>../../include/img/logo_cropped.png" />
                <a href="<?php echo $_POST['extradirs']; ?>../logout">Logout</a>
                <div class="clearfix"></div>
            </div>
            <div id="content">
                <div id="nav">
                    <ul>
                    	<li><a href="<?php echo $_POST['extradirs']; ?>../admin_home/">Email List</a></li>
                        <li><a href="<?php echo $_POST['extradirs']; ?>../admin_events/">Events</a></li>
                        <li><a href="<?php echo $_POST['extradirs']; ?>../admin_sponsors/">Sponsors</a></li>
                        <li><a href="<?php echo $_POST['extradirs']; ?>../admin_documents/">Documents</a></li>
                        <li><a href="<?php echo $_POST['extradirs']; ?>../admin_photos">Photos</a></li>
                    </ul>
                </div>
                <div id="main">
                    <?php if(isset($_GET['msg'])) { ?>
                    <div class="msg"><?php echo $_GET['msg']; ?></div>
                    <?php
                    }?>
                    <div id="alert"></div>