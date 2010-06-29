<?php $_POST['title'] = 'Edit Photos'; ?>
<?php $_POST['extradirs'] = '../'; ?>
<?php $id = $_POST['docid']; ?>
<?php require('../../include/header.php'); ?>
<div class="box">
<form method="post" action="../update/">
    <?php
    $q = "select * from photos p where p.id='" . $_POST[id] . "';";
    $list = db_query($q);
    foreach($list as $l) {?>
	<p>
        <label for="photo">Picture</label>
        <input type="file" id="photo" name="photo" />
        <img src="../../../include/img?i=<?php echo $l[id]; ?>" style="max-width: 500px; max-height: 200px; margin: 2em;"/>
    </p>
    <p>
        <label for="caption">Caption</label>
        <input type="text" id="name" name="name" value="<?php echo $l[caption]; ?>" />
    </p>

    <p><input type="submit" value="Save Changes"></p>
    <?php   
    }
    ?>
</form>
</div>
<?php require('../../include/footer.php'); ?>