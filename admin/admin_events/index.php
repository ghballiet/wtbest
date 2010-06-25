﻿<?php $_POST['title'] = 'Events'; ?>
<?php require('../include/header.php'); ?>
    <!-- Add New Event Table -->        
		<div class="box">
			<h2>Add New Event</h2>
			<table>
				<tr>
					<th>Date <span>YYYY-MM-DD</span></th>
					<th>Time <span>HH:MM</span></th>
				</tr>
				<tr>
					<td><input type="text" name="e.date" /></td>
					<td><input type="text" name="e.time" /></td>
				</tr>
			</table>
			<table>
			    <tr><th>Description</th></tr>
				<tr><td><textarea name="description" id="description"></textarea></td></tr>
			</table>
			<table>
			 <tr><td><input type="submit" /></td></tr>
			</table>
		</div>

        <!-- Manage Events Table -->
		<div class="box">
			<h2>Manage Events</h2>
			<table class="list">
				<tr>
					<th>Date</th>
					<th>Time</th>
					<th>Description</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
				<?php
                    $q = 'select * from events e order by e.date, e.time;';
                    $list = db_query($q);
                    foreach($list as $l) {?>
						<tr>
							<td><?php $format="l F j"; echo date_format(date_create($l['date']),$format); ?></td>
							<td><?php $format="h:iA"; echo date_format(date_create($l['time']),$format); ?></td>
							<td><?php echo $l[description]?></td>
							<td><form method="post" action="edit/"><input type="hidden" name="eventid" id="eventid" value="<?php echo $l[id]; ?>"><input type="submit" value="Edit"/></form></td>
							<td><form method="post" action="delete/"><input type="hidden" name="eventid" id="eventid" value="<?php echo $l[id]; ?>"><input type="submit" value="Delete" /></form></td>
						</tr>
					<?php
					}
					?>
			</table>
		</div>
<?php require('../include/footer.php'); ?>