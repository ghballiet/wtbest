<?php $_POST['title'] = 'Photos'; ?>	
<?php require('../include/header.php'); ?>
<!-- Add Photo and Caption Table -->
    <div class="box">
	    <h2>Add Photo</h2>
		<table>
			<tr>
			    <th>Photo</th>
			    <th>Caption</th>
			</tr>
			<tr>
			    <td><input type="file" id="photo" name="photo" /></td>
			    <td><input type="text" id="caption" name="caption" /></td>
			</tr>
		</table>
		<table>
		  <tr><td><input type="submit" /></td></tr>
		</table>
		</div>
	
<!-- Manage existing Photos & Captions EDIT/DELTE -->	
        <div class="box">
		<h2>Manage Photos</h2>
		<table>
			<tr>
				<th>Caption</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php
                $q = 'select p.id, p.photo, p.caption from photos p order by p.id;';
                $list = db_query($q);
                foreach($list as $l) { ?>
				<tr>
					<td><?php echo $l[caption]; ?> </td>
					<td><form method="post" action="edit/"><input type="hidden" name="id" id="id" value="<?php echo $l[id]; ?>" /><input type="submit" value="Edit" /></form></td>
					<td><input type="submit" value="Delete" /></td>
				</tr>
			<?php
			}
			?>
		</table>
		</div>
<?php require('../include/footer.php'); ?>