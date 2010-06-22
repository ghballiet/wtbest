<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- ADMIN EVENT PAGE -->

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" type="text/css" href="../include/admin_header.css" /> 
<title>WTBest Admin Events</title>
</head>

<body>
	<h1 class="admin_title">
		WTBest Administration ~ Events
	</h1>
	<div class="navigation">
		<ul>
        	<li><a href="../admin_home/index.php">Email List</a></li>
            <li><a href="../admin_events/index.php">Add/Edit Events</a></li>
            <li><a href="../admin_sponsors/index.php">Add/Edit Sponsors</a></li>
            <li><a href="../admin_documents/index.php">Add/Edit Documents</a></li>
        </ul>
    </div>
        
<!-- Add New Event Table -->        
	<div class="content">
		<form name="input" method="get">
			<h2>Add New Event</h2>
			<table>
				<tr>
					<td>Date(YYYY-MM-DD)</td>
					<td>Time(HH:MM)</td>
				</tr>
				<tr>
					<td><input type="text" name="e.date" /></td>
					<td><input type="text" name="e.time" /></td></tr>
			</table>
			<p>Description</p>
			<table>
				<tr>
					<td><input type="text" name="e.description" /></td>
				</tr>
			</table>
			<input type="submit" value="Submit" />
		</form>
	</div>

<!-- Manage Events Table -->
	<div class="content">
		<form name="manage_events" method="get">
			<h2>Manage Events</h2>
			<table class="list">
				<tr>
					<td>Date</td>
					<td>Time</td>
					<td>Description</td>
					<td>Edit</td>
					<td>Delete</td>
				</tr>
				<?php
                    $q = 'select * from events e order by e.date, e.time;';
                    $list = db_query($q);
                    foreach($list as $l) {?>
						<tr>
							<td><?php echo $l[date]?></td>
							<td><?php echo $l[time]?></td>
							<td><?php echo $l[description]?></td>
							<td><input type="submit" value="Edit" /></td>
							<td><input type="submit" value="Delete" /></td>
						</tr>
					<?php
					}
					?>
			</table>
		</form>

	</div>
</body>

</html>
