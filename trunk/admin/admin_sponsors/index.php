<?php $_POST['title'] = 'Sponsors';?>
<?php require('../include/header.php'); ?>
<!-- Add Sponsor Logo and Link Table -->
    <div class="box">
        <form method="post" enctype="multipart/form=data" action="add/index.php">
	    <h2>Add Sponsor</h2>
		<table>
			<tr>
			    <th>Name <span id="nm_chars">500/500</span></th>
			    <th>URL <span id="ur_chars">500/500</span></th>
			    <th>Logo</th>
			</tr>
			<tr>
			    <td><input type="text" id="name" name="name" /></td>
			    <td><input type="text" id="url" name="url" /></td>			    
			    <td><input type="file" id="logo" name="logo" /></td>
			</tr>
		</table>
		<table>
		  <tr><td><input type="submit" /></td></tr>
		</table>
		</form>
		</div>
	
<!-- Manage existing Sponsor Logo/Links EDIT/DELTE -->	
        <div class="box">
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
					<td><img src="../../include/img/?i=<?php echo $l[id]?>" /></td>
					<td><a href="<?php echo $l[url]?>"><?php echo $l[url] ?></a></td>
					<td><form method="post" action="edit/"><input type="hidden" name="id" id="id" value="<?php echo $l['id']; ?>" /><input type="submit" value="Edit" /></form></td>
					<td><form method="post" action="delete/"><input type="hidden" name="id" id="id" value="<?php echo $l['id']; ?>" /><input type="submit" value="Delete" /></form></td>
				</tr>
			<?php
			}
			?>
		</table>
		</div>
		<script type="text/javascript">
		$(document).ready(function() {
		   ccount('name','nm_chars',500);
		   ccount('url','ur_chars',500);
		});
		</script>
<?php require('../include/footer.php'); ?>