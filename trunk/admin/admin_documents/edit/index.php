<!-- admin_documents/edit/index.php : is called by admin_documents/index.php to give user form to edit a document's 
	title and description. -->

<?php $_POST['title'] = 'Edit Document'; ?>
<?php $_POST['extradirs'] = '../'; ?>
<?php $id = $_POST['docid']; ?>
<?php require('../../include/header.php'); ?>
<div class="box">
<form method="post" action="../update/">
    <?php
    $q = "select * from documents d where d.id='" . $id . "';";
    $list = db_query($q);
    foreach($list as $l) {?>
    <p>
        <input type="hidden" name="id" id="id" value="<?php echo $l[id]; ?>" />
        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="<?php echo $l[title]; ?>" />
    </p>
    <p>
        <label for="description">Description</label>
        <textarea name="description" id="description"><?php echo $l[description]; ?></textarea>
    </p>
<!--    <p>
        <label for="file">Upload File</label>
        <input type="file" name="file" id="file" />
    </p>-->
    <p><input type="submit" value="Save Changes"></p>
    <?php   
    }
    ?>
</form>
</div>
<?php require('../../include/footer.php'); ?>