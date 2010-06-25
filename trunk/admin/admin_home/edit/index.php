<?php $_POST['title'] = 'Edit Mail List'; ?>
<?php $_POST['extradirs'] = '../'; ?>
<?php $id = $_POST['docid']; ?>
<?php require('../../include/header.php'); ?>
<form>
    <?php
    $q = "select * from mailing_list m where m.id='" . $id . "';";
    $list = db_query($q);
    foreach($list as $l) {?>
	<p>
		<label for="org_name">Organization Name</label>
		<input type="text" id="org_name" name="org_name" value="<?php echo $l[org_name]; ?>" />
	</p>
	<p>
        <select id="org_type" name="org_type">
			<option value="org_type"><?php echo $l[org_type]; ?></option>
            <option value="jrhigh">Junior High School</option>
            <option value="srhigh">High School</option>
            <option value="sponsor">Sponsor</option>
            <option value="other">Other</option>
        </select>
    </p>
    <p>
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $l[first_name]; ?>" />
    </p>
    <p>
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $l[last_name]; ?>" />
    </p>
    <p>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="<?php echo $l[email]; ?> />
    </p>
	<p>
        <label for="zip">Zip</label>
        <input type="text" id="zip" name="zip" value="<?php echo $l[zip]; ?> />
    </p>
    <p><input type="submit" value="Save Changes"></p>
    <?php   
    }
    ?>
</form>
<?php require('../../include/footer.php'); ?>