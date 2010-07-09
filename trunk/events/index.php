<?php $_POST['title'] = 'Events'; ?>
<?php $_POST['callout_title'] = 'Find out what we\'re up to.'; ?>
<?php $_POST['callout_text'] = 'Dates of upcoming West Texas BEST Events.';?>
<?php $_POST['custom_css'] = array('events.css'); ?>
<?php require('../master/header.php'); ?>

                    <!-- content starts here -->
                    <div class="event legend">
                        <span class="date">Date</span>
                        <span class="time">Time</span>
                        <span class="desc">Description</span>
                    </div>                    
                    <?php
                    $q = 'select * from events e order by e.date, e.time;';
                    $list = db_query($q);
                    foreach($list as $l) {?>
                    <div class="event">
                        <span class="date"><?php $format="l F j"; echo date_format(date_create($l['date']),$format); ?></span>
                        <span class="time"><?php $format="h:iA"; echo date_format(date_create($l['time']),$format); ?></span>
                        <span class="desc"><?php echo $l['description']; ?></span>
                    </div>
                    <?php    
                    }
                    ?>
                    <!-- end of content -->

<?php require('../master/footer.php'); ?>