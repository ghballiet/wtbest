<?php $_POST['title']='Email List'; ?>
<?php require('../include/header.php'); ?>
<!-- Listing of users who have signed up for the Mailing List -->
<!-- Admin has rights to Delete existing users in list -->
		<h2>Email List</h2>
		<table>
			<tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Organization Name</th><th>Organization Type</th><th>Zip</th><th>Delete</th></tr>
			<?php
				i=array(email_list);
				foreach ($i as $value)
					{ ?>
					 <tr>
						<td><?php echo $value.first_name ?></td>
						<td><?php echo $value.last_name ?></td>
						<td><?php echo $value.email ?></td>
						<td><?php echo $value.org_name ?></td>
						<td><?php echo $value.org_type ?></td>
						<td><?php echo $value.org_zip ?></td>
						<td><input type="submit" value="Delete" /></td>
					 </tr>
			<?php
					}
			?>
			
<!-- Add new user to email list -->			
			<form action="email_list.php" method="get">
				<tr>
					<td><input type="text" name="first_name" /></td>
					<td><input type="text" name="last_name" /></td>
					<td><input type="text" name="email" /></td>
					<td><input type="text" name="org_name" /></td>
					<td>
						<select id="org_type" name="org_type">
							<option value="">--------------------</option>
							<option value="jrhigh">Junior High School</option>
							<option value="srhigh">High School</option>
							<option value="sponsor">Sponsor</option>
							<option value="other">Other</option>
                        </select>
                    </td>
					<td><input type="submit" value="Add" /></td>
				</tr>
			</form>
		</table>

<?php require('../include/footer.php'); ?>