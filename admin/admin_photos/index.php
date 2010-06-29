<?php $_POST['title'] = 'Photos'; ?>
<?php require('../include/header.php'); ?>
<!-- Add New Event Table -->        
<div class="box">
	<h2>Upload a Photo</h2>
	<table>
	   <tr><th>Photo</th><th>Caption <span id="cp_chars">500/500</span></th></tr>
	   <tr>
	       <td><input type="file" id="photo" name="photo" /></td>
	       <td><input type="text" id="caption" name="caption" /></td>
	   </tr>
	</table>
	<table>
	   <tr><td><input type="submit" /></td></tr>
	</table>
</div>

<!-- Manage Events Table -->
<div class="box">
	<h2>Manage Photos</h2>
	<table>
	    <tr><th>Photo</th><th>Caption</th><th></th><th></th></tr>
	    <?php
	    $q = "select * from photos p order by p.id;";
	    $list = db_query($q);
	    foreach($list as $l) {?>
	    <tr>
	        <td><img src="../../home/photo.php?i=<?php echo $l[id]; ?>" class="bigpic" /></td>
	        <td><?php echo $l[caption]; ?></td>
	        <td><input type="submit" value="Edit" /></td>
	        <td><input type="submit" value="Delete" /></td>
	    </tr>
	    <?php    
	    }
	    ?>
	</table>
</div>
<script type="text/javascript">
ccount('caption','cp_chars',500);
</script>
<?php require('../include/footer.php'); ?>