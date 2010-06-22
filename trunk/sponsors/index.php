<?php $_POST['title'] = 'Sponsors'; ?>
<?php $_POST['callout_title'] = 'Please visit our sponsors.'; ?>
<?php $_POST['callout_text'] = "Without the help of the companies you see below, West Texas BEST wouldn't be possible. By clicking the links below, you're not only supporting future BEST competitions; you're also encouraging the study of science and technology for our participants. And that is what BEST is all about.";?>
<?php $_POST['custom_css'] = array('sponsors.css'); ?>
<?php require('../master/header.php'); ?>

                    <!-- content starts here -->                    
                    <?php
                    $q = 'select s.id, s.name, s.url from sponsor s order by s.name;';
                    $list = db_query($q);
                    foreach($list as $l) {
                        echo '<a href="' . $l['url'] . '"><img src="../include/img/?i=' . $l['id'] . '" alt="' . $l['name'] . '" title="' . $l['name'] . '"/></a>';
                    }
                    ?>
                    <!-- end of content -->

<?php require('../master/footer.php'); ?>