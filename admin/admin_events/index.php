﻿<?php $_POST['title'] = 'Events'; ?>
<?php require('../include/header.php'); ?>
    <!-- Add New Event Table -->        
		<form name="input" method="get">
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
			 <?php
					db_udpdate("INSERT INTO events (date, time, description)
						VALUES ('$_POST[e.date]','$_POST[e.time]','$_POST[description]')";
				?>
			</table>
		</form>

        <!-- Manage Events Table -->
		<form name="events" method="post" action="edit/">
		    <input type="hidden" id="eventid" name="eventid" />
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
							<td><?php echo $l[date]?></td>
							<td><?php echo $l[time]?></td>
							<td><?php echo $l[description]?></td>
							<td><input type="submit" value="Edit" onclick="eventid.value='<?php echo $l[id]; ?>';"/></td>
							<td><input type="submit" value="Delete" /></td>
						</tr>
					<?php
					}
					?>
			</table>
		</form>
<?php require('../include/footer.php'); ?>