<?php $_POST['title'] = 'Documents'; ?>
<?php $_POST['callout_title'] = 'Read all about it.'; ?>
<?php $_POST['callout_text'] = "Without the help of the companies you see below, West Texas BEST wouldn't be possible. By clicking the links below, you're not only supporting future BEST competitions; you're also encouraging the study of science and technology for our participants. And that is what BEST is all about.";?>
<?php $_POST['custom_css'] = array('documents.css'); ?>
<?php require('../master/header.php'); ?>

                    <!-- content starts here -->
                    <div class="doc legend">
                        <span class="title">Title</span>
                        <span class="desc">Description</span>
                    </div>
                    
                    <?php
                    $q = 'select * from documents d order by d.title;';
                    $list = db_query($q);
                    foreach($list as $l) { ?>
                    <div class="doc">
                        <span class="title"><a href="../include/doc/?i=<?php echo $l['id']; ?>"><?php echo $l['title']; ?></a></span>
                        <span class="desc"><?php echo $l['description']; ?></span>
                    </div><?php
                    }
                    ?>
                    <!-- end of content -->

<?php require('../master/footer.php'); ?>