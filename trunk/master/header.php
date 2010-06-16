<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<?php require_once('../include/php/functions.php'); ?>
<?php require_once('../include/php/database.php'); ?>
<?php $link=db_connect(); ?>
<html>
    <head>
    <?php if(isset($_POST['title'])){ $page_title = $_POST['title']." | West Texas BEST" ; } else { $page_title = "West Texas BEST"; } ?>
    <title><?php echo htmlentities($page_title); ?></title>

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../include/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="../include/css/master.css" />
    <?php foreach($_POST['custom_css'] as $cssfile) {
        echo '<link rel="stylesheet" type="text/css" href="' . $cssfile . '" />';
    } ?>

    <!-- javascript -->
    <script src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
    <script src="../include/js/css-gradients-via-canvas.js"></script>

    </head>
    <body>
        <div id="wrapper">
            <div id="top">
                <div class="container">
                    <ul><?php require('nav.php'); ?></ul>
                    <img id="logo" src="../include/img/logo_cropped_alpha.png" />
                    <div class="clearfix"></div>
                </div>
            </div>
            <div id="callout">
                <div class="shadow-top"></div>                
                <div class="container">
                    <h1><?php echo $_POST['callout_title']; ?></h1>
                    <p><?php echo $_POST['callout_text']; ?></p>
                </div>
                <div class="shadow-bottom"></div>                
            </div>
            <div id="content">
                <div class="container">