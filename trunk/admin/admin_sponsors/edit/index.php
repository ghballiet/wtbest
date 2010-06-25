<?php $_POST['title'] = 'Edit Sponsor'; ?>
<?php $_POST['extradirs'] = '../'; ?>
<?php $id = $_POST['docid']; ?>
<?php require('../../include/header.php'); ?>
<form>
    <?php
    $q = "select * from sponsor d where d.id='" . $id . "';";
    $list = db_query($q);
    foreach($list as $l) {?>
    <p>
        <label for="image">Logo</label>
        <input type="text" id="image" name="image" value="<?php echo $l[image]; ?>" />
    </p>
    <p>
        <label for="name">Sponsor Name</label>
        <input type="text" id="name" name="name" value="<?php echo $l[name]; ?>" />
    </p>
    <p>
        <label for="url">URL</label>
        <input type="text" id="url" name="url" value="<?php echo $l[url]; ?>" />
    </p>
    <p><input type="submit" value="Save Changes"></p>
    <?php   
    }
    ?>
</form>
<?php require('../../include/footer.php'); ?>