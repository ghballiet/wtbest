<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php require_once('../../include/php/database.php'); ?>
<?php $link=db_connect(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="../../include/css/reset.css" />
        <link rel="stylesheet" type="text/css" href="../include/master.css" />
        <title><?php echo $_POST['title']; ?> | West Texas BEST Administration</title>
    </head>
    <body>
        <div id="wrapper">
            <div id="top">
                <h1><?php echo $_POST['title']; ?></h1>
                <img src="../../include/img/logo_cropped.png" />
                <div class="clearfix"></div>
            </div>
            <div id="content">
                <div id="nav">
                    <ul>
                    	<li><a href="../admin_home/">Email List</a></li>
                        <li><a href="../admin_events/">Events</a></li>
                        <li><a href="../admin_sponsors/">Sponsors</a></li>
                        <li><a href="../admin_documents/">Documents</a></li>
                    </ul>
                </div>
                <div id="main">