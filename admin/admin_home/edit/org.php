<!-- admin/admin_home/edit/org.php : is called by admin_home/index to allow admin to edit organization in the database. 
	 -->

<?php $_POST['title'] = 'Edit Organization List'; ?>
<?php $_POST['extradirs'] = '../'; ?>
<?php $id = $_POST['docid']; ?>
<?php require('../../include/header.php'); ?>
<div class="box">
<form method="post" action="update_org.php">
    <?php
    $q = "select * from org_type o where o.id='" . $id . "';";
    $list = db_query($q);
    foreach($list as $l) {?>
	<p>
		<input type="hidden" name="id" id="id" value="<?php echo $l[id]; ?>" />
		<label for="name">Organization Type</label>
		<input type="text" id="name" name="name" value="<?php echo $l[name]; ?>" />
	

    <input type="submit" value="Save Changes">
	<input type="submit" value="Cancel">
	</p>
    <?php   
    }
    ?>
</form>
</div>
<?php require('../../include/footer.php'); ?>