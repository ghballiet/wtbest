<?php $_POST['title'] = 'Edit Photos'; ?>
<?php $_POST['extradirs'] = '../'; ?>
<?php $id = $_POST['id']; ?>
<?php require('../../include/header.php'); ?>
<div class="box">
<form method="post" action="../update/">
<?php
    $q = "select * from photos p where p.id='" . $id . "';";
    $list = db_query($q);
    foreach($list as $l) {
?>
	<p>
		<input type="hidden" name="id" id="id" value="<?php echo $l[id]; ?>" />
        <label for="photo">Picture</label>
        <input type="file" id="photo" name="photo" />
        <img src="../../../home/photo.php?i=<?php echo $l[id]; ?>" style="max-width: 500px; max-height: 200px; margin: 2em;"/>
    </p>
    <p>
        <label for="caption">Caption</label>
        <input type="text" id="caption" name="caption" value="<?php echo $l[caption]; ?>" />
    </p>

    <p><input type="submit" value="Save Changes"></p>
    <?php   
    }
    ?>
</form>
</div>
<?php require('../../include/footer.php'); ?>