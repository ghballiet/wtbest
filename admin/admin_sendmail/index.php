<?php $_POST['title'] = 'Send Email'; ?>
<?php require('../include/header.php'); ?>
    <div class="box">
        <h2>Send Email</h2>
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
					<th>Additional Recipients</th>
				</tr>
				<tr>
					<td>
                    <select id="name" name="name" multiple="multiple">
                    <option value=""></option>
                    <?php
                    $q = "select * from mailing_list l order by l.last_name;";
                    $list = db_query($q);
                    foreach($list as $l) { ?>
                    <option value="<?php echo $l[id]; ?>"><?php echo $l[first_name]; echo " "; echo $l[last_name]; ?></option>
                    <?php
                    }
                    ?>
                    </select>
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