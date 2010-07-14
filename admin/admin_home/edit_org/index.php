<?php $_POST['title'] = 'Edit Organization List'; 
//<!-- admin_home/edit_org/index.php : is called by admin_home/index to allow admin to edit an organization in the database. -->?>
<?php $_POST['extradirs'] = '../'; ?>
<?php $id = $_POST['docid']; ?>
<?php require('../../include/header.php'); ?>

<form>
    <?php
    $q = "select * from org_list o where o.id='" . $id . "';";
    $list = db_query($q);
    foreach($list as $l) {?>
	<p>
		<label for="name">Organization Type</label>
		<input type="text" id="name" name="name" value="<?php echo $l[name]; ?>" />
	</p>

    <p><form method="post" action="../edit/index.php" ><input type="submit" value="Save Changes"></p>
    <?php   
    }
    ?>
</form>
<?php require('../../include/footer.php'); ?>