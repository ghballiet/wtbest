<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- ADMIN EMAIL LIST -->

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" type="text/css" href="../include/admin_header.css" /> 
<title>WTBest Admin Home</title>
</head>

<body>
	<h1 class="admin_title">
		WTBest Administration ~ Email List
	</h1>
	<div class="navigation">
		<ul>
        	<li><a href="../admin_home/index.php">Email List</a></li>
            <li><a href="../admin_events/index.php">Add/Edit Events</a></li>
            <li><a href="../admin_sponsors/index.php">Add/Edit Sponsors</a></li>
            <li><a href="../admin_documents/index.php">Add/Edit Documents</a></li>
        </ul>
	</div>

	
<!-- Listing of users who have signed up for the Mailing List -->
<!-- Admin has rights to Delete existing users in list -->
	<div class="content">
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
	</div>
</body>

</html>
