<?php $_POST['title'] = 'Documents'; ?>
<?php $_POST['callout_title'] = 'Read all about it.'; ?>
<?php $_POST['callout_text'] = "Important Information for West Texas BEST can be found by clicking on the links below.";?>
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