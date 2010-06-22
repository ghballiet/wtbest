<?php $_POST['title'] = 'Sponsors'; ?>	
<?php require('../include/header.php'); ?>
<!-- Add Sponsor Logo and Link Table -->
    <form>
	    <h2>Add Sponsor</h2>
		<table>
			<tr>
			    <th>Name</th>
			    <th>Logo</th>
			    <th>URL</th>
			</tr>
			<tr>
			    <td><input type="text" id="name" name="name" /></td>
			    <td><input type="text" id="url" name="url" /></td>			    
			    <td><input type="file" id="logo" name="logo" /></td>
			</tr>
		</table>
		</form>
	
<!-- Manage existing Sponsor Logo/Links EDIT/DELTE -->	
        <form>
		<h2>Manage Sponsors</h2>
		<table>
			<tr>
				<th>Name</th>
				<th>Logo</th>
				<th>Link</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<?php
                $q = 'select s.id, s.name, s.url from sponsor s order by s.name;';
                $list = db_query($q);
                foreach($list as $l) { ?>
				<tr>
					<td><?php echo $l[name]?></td>
					<td><img src="../../include/img?i=<?php echo $l[id]?>" /></td>
					<td><a href="<?php echo $l[url]?>"><?php echo $l[url]; ?></a></td>
					<td><input type="submit" value="Edit" /></td>
					<td><input type="submit" value="Delete" /></td>
				</tr>
			<?php
			}
			?>
		</table>
		</form>
<?php require('../include/footer.php'); ?>