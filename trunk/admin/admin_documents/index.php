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
				<?php
					db_udpdate("INSERT INTO documents (title, description, browse)
						VALUES ('$_POST[title]','$_POST[description]','$_POST[document]')";
				?>
    		</tr>
    	</table>
    	<table>
    	   <tr><td><input type="submit" value="Submit" /></td></tr>
    	</table>
    </form>
	
    <!--Table to Manage existing documents -->	
    <form method="post" action="edit/">
        <h2>Manage Documents</h2>
        <input type="hidden" name="docid" id="docid" />
    	<table>
    		<tr><th>Title</th><th>Description</th><th>File</th><th></th><th></th></tr>
    			<?php
    				$q = 'select * from documents d order by d.title;';
                    $list = db_query($q);
                    foreach($list as $l) { ?>
    					<tr>
    						<td><?php echo $l[title]?></td>
    						<td><?php echo $l[description]?></td>
    						<td><a href="../../include/doc/?i=<?php echo $l['id']?>">View</a></td>
    						<td><input type="submit" value="Edit" onclick="docid.value='<?php echo $l[id]; ?>';"/></td>
    						<td><input type="submit" value="Delete" /></td>
    					</tr>
    			<?php 
    			}
    			?>
    	</table>
    </form>
<?php require('../include/footer.php'); ?>