<?php $_POST['title'] = 'Send Email'; ?>
<?php require('../include/header.php'); ?>
    <div class="box">
        <h2>Add Recipient</h2>
		<form method="post" action="sendmail.php">
			<table>
				<tr><th>Organization Type to Email<th><tr>
				<tr> <td>
                    <select id="org_type" name="org_type">
                    <option value=""></option>
                    <?php
                    $q = "select * from org_type o order by o.name;";
                    $list = db_query($q);
                    foreach($list as $l) { ?>
                    <option value="<?php echo $l[id]; ?>"><?php echo $l[name]; ?></option>
                    <?php
                    }
                    ?>
                    </select>
				</td></tr>
				<tr>
					<th>Subject</th>
					<td><input type="text" name="subject" id="subject" /></td>
				</tr>
				<tr>
					<th>Message</th>
				</tr>
                <tr>
					<td><textarea name="message" id="message" /></textarea></td>
				</tr>
				<tr>
					<td><input type="submit" value="Send" /></td>
				</tr>
			</table>
		</form>
	</div>