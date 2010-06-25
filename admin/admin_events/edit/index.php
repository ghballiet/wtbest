<?php $_POST['title'] = 'Edit Event'; ?>
<?php $_POST['extradirs'] = '../'; ?>
<?php $id = $_POST['eventid']; ?>
<?php require('../../include/header.php'); ?>
<div class="box">
<form method="post" action="../update/">
    <?php
    $q = "select * from events e where e.id='" . $id . "';";
    $list = db_query($q);
    foreach($list as $l) {?>
    <input type="hidden" name="id" id="id" value="<?php echo $l[id]; ?>" />
    <p>
        <label for="date">Date</label>
        <input type="text" id="date" name="date" value="<?php echo $l[date]; ?>" />
    </p>
    <p>
        <label for="time">Time</label>
        <input type="text" id="time" name="time" value="<?php echo $l[time]; ?>" />
    </p>
    <p>
        <label for="description">Description</label>
        <textarea id="description" name="description"><?php echo $l[description]; ?></textarea>
    </p>
    <p><input type="submit" value="Save Changes"></p>
    <?php   
    }
    ?>
</form>
</div>
<?php require('../../include/footer.php'); ?>