<?php $_POST['title']='Documents'; ?>
<?php require('../include/header.php'); ?>
    <!--Table to add new document -->
    <form>
    <h2>Add New Document</h2>
    	<table>
    		<tr><th>Title</th><th>Description</th><th>Upload</th></tr>
    	    <tr>
    		    <td><input type="text" name="title" id="title" /></td>
    		    <td><input type="text" name="description" id="description" /></td>
    		    <td>
    		        <input type="file" name="browse" id="browse"/>
    		    </td>
    		</tr>
    	</table>
    </form>
	
    <!--Table to Manage existing documents -->	
    <h2>Manage Documents</h2>
    <form>
    	<table>
    		<tr><th>Title</th><th>Description</th><th>File</th><th>Edit</th><th>Delete</th></tr>
    			<?php
    				$q = 'select * from documents d order by d.title;';
                    $list = db_query($q);
                    foreach($list as $l) { ?>
    					<tr>
    						<td><?php echo $l[title]?></td>
    						<td><?php echo $l[description]?></td>
    						<td><a href="../../include/doc/?i=<?php echo $l['id']?>">View</a></td>
    						<td><input type="submit" value="Edit" /></td>
    						<td><input type="submit" value="Delete" /></td>
    					</tr>
    			<?php 
    			}
    			?>
    	</table>
    </form>
<?php require('../include/footer.php'); ?>