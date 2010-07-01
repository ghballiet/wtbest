<?php $_POST['title'] = 'Send Email'; ?>
<?php require('../include/header.php'); ?>
    <div class="box">
        <h2>Send Email</h2>
		<form method="post" action="sendmail.php">
			<table>
				<tr><th>Organization Type to Email<th><tr>
				<tr> <td>
                    <?php
                    $q = "select * from org_type o order by o.name;";
                    $list = db_query($q);
                    foreach($list as $l) { ?>
                    <p><input type="checkbox" name="org_type[]" value="<? echo $l[id]; ?>"/><? echo $l[name]; ?></p>
                    <?php
                    }
                    ?>
				</td></tr>
				<tr>
					<th>Additional Recipients</th>
				</tr>
				<tr>
					<td>
                    <?php
                    $q = "select * from mailing_list l order by l.last_name;";
                    $list = db_query($q);
                    foreach($list as $l) { ?>
                    <p><input type="checkbox" name="name[]" value="<? echo $l[id]; ?>"><? echo $l[first_name] . ' ' . $l[last_name]; ?><? echo $l[name]; ?>(<?echo $l[email]; ?>)</p>
                    <?php
                    }
                    ?>
					</td>
				</tr>
				<tr>
					<th>Subject</th>
				</tr>
				<tr>
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