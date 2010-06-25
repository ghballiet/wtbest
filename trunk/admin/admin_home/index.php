<?php $_POST['title'] = 'Email List'; ?>	
<?php require('../include/header.php'); ?>
    <div class="box">
        <h2>Add Recipient</h2>
        <table>
            <tr><th>Organization</th><th>First Name</th><th>Last Name</th></tr>
            <tr>
                <td><input type="text" name="org_name" id="org_name" /></td>
				<td>
                    <select id="org_type" name="org_type">
						<option value="">--------------------</option>
						<option value="jrhigh">Junior High School</option>
						<option value="srhigh">High School</option>
						<option value="sponsor">Sponsor</option>
						<option value="other">Other</option>
                    </select>
                 </td>
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
        <table><tr><td><input type="submit" value="Submit"/></td></tr></table>
    </div>
    
    <div class="box">
        <h2>Current List</h2>
        <table>
            <tr><th>Organization</th><th>First Name</th><th>Last Name</th><th>Email</th><th>ZIP</th></tr>
            <?php
            $q = 'select * from mailing_list m order by m.org_name, m.first_name, m.last_name, m.email, m.zip;';
            $list = db_query($q);
            foreach ($list as $l) {
            ?>
            <tr>
                <td><?php echo $l[org_name]; ?></td>
				<td><?php echo $l[org_type]; ?></td>
                <td><?php echo $l[first_name]; ?></td>
                <td><?php echo $l[last_name]; ?></td>
                <td><?php echo $l[email]; ?></td>
                <td><?php echo $l[zip]; ?></td>
				<td><input type="submit" value="Edit" onclick="docid.value='<?php echo $l[id]; ?>';"/></td>
    			<td><input type="submit" value="Delete" /></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    
    <div class="box">
        <h2>Add Organization Type</h2>
        <table>
            <tr><th>Type</th><th>Name</th></tr>
            <tr><td><input type="text" id="type" name="type" /></td><td><input type="text" id="name" name="name" /></td></tr>
        </table>
        <table><tr><td style="text-align: right"><input type="submit" /></td></tr></table>
    </div>
    
    <div class="box">
        <h2>Organization Types</h2>
        <table>
            <tr><th>Type</th><th>Name</th><th></th><th></th></tr>
            <?php
            $q = 'select distinct(m.org_name), o.name from mailing_list m, org_type o where m.org_type = o.id;';
            $list = db_query($q);
            foreach($list as $l) {
            ?>
            <tr>
                <td><? echo $l[name]; ?></td>
                <td><? echo $l[org_name]; ?></td>
                <td><form method="post" action="edit/"><input type="hidden" name="id" id="id" value="<?php echo $l[id]; ?>" /><input type="submit" value="Edit" /></form></td>
                <td><form method="post" action="delete/"><input type="hidden" name="id" id="id" value="<?php echo $l[id]; ?>" /><input type="submit" value="Delete" /></form></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
<?php require('../include/footer.php'); ?>