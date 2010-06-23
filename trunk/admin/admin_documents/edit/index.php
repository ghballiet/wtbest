<?php $_POST['title'] = 'Edit Document'; ?>
<?php $_POST['extradirs'] = '../'; ?>
<?php $id = $_POST['docid']; ?>
<?php require('../../include/header.php'); ?>
<form>
    <?php
    $q = "select * from documents d where d.id='" . $id . "';";
    $list = db_query($q);
    foreach($list as $l) {?>
    <p>
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="<?php echo $l[title]; ?>" />
    </p>
    <p>
        <label for="description">Description</label>
        <textarea name="description" id="description"><?php echo $l[description]; ?></textarea>
    </p>
    <p>
        <label for="file">Upload File</label>
        <input type="file" name="file" id="file" />
    </p>
    <p><input type="submit" value="Save Changes"></p>
    <?php   
    }
    ?>
</form>
<?php require('../../include/footer.php'); ?>