<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!--ADMIN SPONSOR PAGE -->

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" type="text/css" href="../include/admin_header.css" /> 
<title>WTBest Admin Sponsors</title>
</head>

<body>
	<h1 class="admin_title">
		WTBest Administration ~ Sponsors
	</h1>
	<div class="navigation">
		<ul>
        	<li><a href="../admin_home/index.php">Email List</a></li>
            <li><a href="../admin_events/index.php">Add/Edit Events</a></li>
            <li><a href="../admin_sponsors/index.php">Add/Edit Sponsors</a></li>
            <li><a href="../admin_documents/index.php">Add/Edit Documents</a></li>
        </ul>
	</div>
	
<!-- Add Sponsor Logo and Link Table -->	
	<div class="content">
		<h2>Add Sponsor</h2>
		<table>
			<tr>
				<th>Add Sponsor Logo</th>
				<th></th>
				<th>Add Sonsor Site Link</th>
				<th></th>
			</tr>
			<tr>
				<td><input type="text" name="sponsor_logo" /></td>
				<td><input type="button" value="Browse" /></td>
				<td><input type="text" name="sponsor_link" /></td>
				<td><input type="button" value="Browse" /></td>
			</tr>
		</table>
	</div>
	
<!-- Manage existing Sponsor Logo/Links EDIT/DELTE -->	
	<div class="content">
		<h2>Manage Sponsors</h2>
		<table>
			<tr>
				<th>Name</th>
				<th>Logo</th>
				<th>Link</th>
				<th>Edit</th>
				<th>Delete Sponsor</th>
			</tr>
			<?php
                $q = 'select s.id, s.name, s.url from sponsor s order by s.name;';
                $list = db_query($q);
                foreach($list as $l) { ?>
				<tr>
					<td><?php echo $l[name]?></td>
					<td><?php $l[logo]?></td>
					<td><?php $l[url]?></td>
					<td><input type="submit" value="Edit" /></td>
					<td><input type="submit" value="Delete" /></td>
				</tr>
			<?php
			}
			?>
		</table>
	</div>


</body>

</html>
