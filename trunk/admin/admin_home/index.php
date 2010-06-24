<?php $_POST['title'] = 'Email List'; ?>	
<?php require('../include/header.php'); ?>
    <form>
        <h2>Add Recipient</h2>
        <table>
            <tr><th>Organization</th><th>First Name</th><th>Last Name</th></tr>
            <tr>
                <td><input type="text" name="org_name" id="org_name" /></td>
                <td><input type="text" name="first_name" id="first_name" /></td>
                <td><input type="text" name="last_name" id="last_name" /></td>
            </tr>
        </table>
        <table>
            <tr><th>Email</th><th>ZIP</th></tr>
            <tr>
                <td><input type="text" name="email" id="email" /></td>
                <td><input type="text" name="zip" id="zip" maxlength="5" /></td>
            </tr>
        </table>
        <table><tr><td><input type="submit" /></td></tr></table>
			<?php
				db_udpdate("INSERT INTO mailing_list (first_name, last_name, email, org_name, zip, org_type)
						VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[email]','$_POST[org_name]','$_POST[zip]','$_POST[org_type]')";
			?>
    </form>
    
    <form>
        <h2>Current List</h2>
        <table>
            <tr><th>Organization</th><th>First Name</th><th>Last Name</th><th>Email</th><th>ZIP</th></tr>
            <?php
            $q = 'select * from mailing_list m order by m.org_name, m.first_name, m.last_name, m.email, m.zip;';
            $list = db_query($q);
            foreach ($list as $l) {
            ?>
            <tr>
                <td><? echo $l[org_name]; ?></td>
                <td><? echo $l[first_name]; ?></td>
                <td><? echo $l[last_name]; ?></td>
                <td><? echo $l[email]; ?></td>
                <td><? echo $l[zip]; ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </form>
    
    <form>
        <h2>Organization Types</h2>
        <table>
            <tr><th>Type</th><th>Name</th></tr>
            <?php
            $q = 'select m.org_name, o.name from mailing_list m, org_type o where m.org_type = o.id;';
            $list = db_query($q);
            foreach($list as $l) {
            ?>
            <tr>
                <td><? echo $l[name]; ?></td>
                <td><? echo $l[org_name]; ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </form>
<?php require('../include/footer.php'); ?>