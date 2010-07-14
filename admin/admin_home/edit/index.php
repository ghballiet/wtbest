<?php $_POST['title'] = 'Edit Mail List';
//<!-- admin/admin_home/edit/index.php : is called by admin_home/index to allow admin to edit a 
//	mailing_list recipient in the database. --> ?>
<?php $_POST['extradirs'] = '../'; ?>
<?php $id = $_POST['docid']; ?>
<?php require('../../include/header.php'); ?>
<div class="box">
<form method="post" action="../update/">
    <?php
    $q = "select * from mailing_list m where m.id='" . $id . "';";
    $list = db_query($q);
    foreach($list as $l) {?>
	<p>
		<input type="hidden" name="id" id="id" value="<?php echo $l[id]; ?>" />
		<label for="org_name">Organization Name</label>
		<input type="text" id="org_name" name="org_name" value="<?php echo $l[org_name]; ?>" />
	</p>
	<p>
		<label for="org_type">Organization Type</label>
		<?php 
			$r = "select name from org_type o where o.id='" . $l[org_type] . "';";
			$org = db_query($r);
			foreach($org as $g) {
		?>
        <select id="org_type" name="org_type">
            <option value="<?php echo $g[id]; ?>"><?php echo $g[name]; ?></option>
            <?php
            $r = "select distinct * from org_type o order by o.name;";
            $listr = db_query($r);
            foreach($listr as $n) { ?>
            <option value="<?php echo $n[id]; ?>"><?php echo $n[name]; ?></option>
            <?php
            }
            ?>
        </select>
		<?php
		}
		?>
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
        <input type="text" id="email" name="email" value="<?php echo $l[email]; ?>" />
    </p>
	<p>
        <label for="zip">Zip</label>
        <input type="text" id="zip" name="zip" value="<?php echo $l[zip]; ?>" />
    </p>
    <p><input type="submit" value="Save Changes"></p>
    <?php   
    }
    ?>
</form>
</div>
<?php require('../../include/footer.php'); ?>