<?php $_POST['title'] = 'Edit Event'; ?>
<?php $_POST['extradirs'] = '../'; ?>
<?php $id = $_POST['eventid']; ?>
<?php require('../../include/header.php'); ?>
<form>
    <?php
    $q = "select * from events e where e.id='" . $id . "';";
    $list = db_query($q);
    foreach($list as $l) {?>
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
		db_udpdate("UPDATE events SET date=e.date, time=e.time, description=description
					WHERE id=$1");
	?>
    <?php   
    }
    ?>
</form>
<?php require('../../include/footer.php'); ?>