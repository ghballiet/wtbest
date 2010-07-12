<!-- admin/admin_sponsors/edit/index.php :  is called from admin/admin_sponsors/index to edit a sponsor's
	name or URL in the database.  To edit the Logo the sponsor would need to be deleted and readded -->

<?php $_POST['title'] = 'Edit Sponsor'; ?>
<?php $_POST['extradirs'] = '../'; ?>
<?php $id = $_POST['id']; ?>
<?php require('../../include/header.php'); ?>
<div class="box">
<form method="post" action="../update/">
    <?php
    $q = "select * from sponsor s where s.id='" . $id . "';";
    $list = db_query($q);
    foreach($list as $l) {?>
    <p>
		<input type="hidden" name="id" id="id" value="<?php echo $l[id]; ?>" />
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?php echo $l[name]; ?>" />
    </p>
    <p>
        <label for="url">URL</label>
        <input type="text" id="url" name="url" value="<?php echo $l[url]; ?>" />
    </p>
    <p>
        <label for="image">Logo</label>
       <!-- <input type="file" id="image" name="image" /> -->
        <img src="../../../include/img?i=<?php echo $l[id]; ?>" style="max-width: 500px; max-height: 200px; margin: 2em;"/>
    </p>
    <p><input type="submit" value="Save Changes"/></p>
    <?php   
    }
    ?>
</form>
</div>
<?php require('../../include/footer.php'); ?>