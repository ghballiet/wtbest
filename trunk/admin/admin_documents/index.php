<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!--ADMIN DOCUMENT PAGE -->

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" type="text/css" href="../include/admin_header.css" /> 
<title>WTBest Admin Documents</title>
</head>

<body>
	<h1 class="admin_title">
		WTBest Administration ~ Documents
	</h1>
	<div class="navigation">
		<ul>
        	<li><a href="../admin_home/index.php">Email List</a></li>
            <li><a href="../admin_events/index.php">Add/Edit Events</a></li>
            <li><a href="../admin_sponsors/index.php">Add/Edit Sponsors</a></li>
            <li><a href="../admin_documents/index.php">Add/Edit Documents</a></li>
        </ul>
	</div>

<!--Table to add new document -->
	<div class="content">
		<h2>
			Add New Document
		</h2>
		<table>
			<tr>
				<th>Add Document Title</th>
				<th>Add Document Description</th>
				<th>Upload Document</th><th></th>
			</tr>
			<tr>
				<td><input type="text" name="d.title" /></td>
				<td><input type="text" name="d.description" /></td>
				<td><input type="text" name="d.file" /><input type="button" value="Browse" /></td>
				<td><input type="submit" value="Submit" /></td>
			</tr>
		</table>
	
	</div>
	
<!--Table to Manage existing documents -->	
	<div class="content">
		<h2>Manage Documents</h2>
		<table>
			<tr>
				<th>Document</th>
				<th>Description</th>
				<th>File</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php
				$q = 'select * from documents d order by d.title;';
                $list = db_query($q);
                foreach($list as $l) { ?>
					<tr>
						<td><?php echo $l[title]?></td>
						<td><?php echo $l[description]?></td>
						<td><?php echo $l[name]?></td>
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
