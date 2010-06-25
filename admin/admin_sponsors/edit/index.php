<?php $_POST['title'] = 'Edit Sponsor'; ?>
<?php $_POST['extradirs'] = '../'; ?>
<?php $id = $_POST['docid']; ?>
<?php require('../../include/header.php'); ?>
<div class="box">
<form>
    <?php
    $q = "select * from sponsor d where d.id='" . $_POST[id] . "';";
    $list = db_query($q);
    foreach($list as $l) {?>
    <p>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="<?php echo $l[name]; ?>" />
    </p>
    <p>
        <label for="url">URL</label>
        <input type="text" id="url" name="url" value="<?php echo $l[url]; ?>" />
    </p>
    <p>
        <label for="image">Logo</label>
        <input type="file" id="image" name="image" />
        <img src="../../../include/img?i=<?php echo $l[id]; ?>" style="max-width: 500px; max-height: 200px; margin: 2em;"/>
    </p>
    <p><input type="submit" value="Save Changes"></p>
    <?php   
    }
    ?>
</form>
</div>
<?php require('../../include/footer.php'); ?>