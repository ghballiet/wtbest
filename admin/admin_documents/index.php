﻿<?php $_POST['title']='Documents'; 
//<!-- admin_documents/index.php : Lists all documents' and their description and title and gives option to add a new one, 
//	edit, or delete existing documents.  Document has to be a PDF file. -->?>
<?php require('../include/header.php'); ?>
    <!--Table to add new document -->
    <div class="box">
	<form method="post" enctype="multipart/form=data" action="add/index.php">
    <h2>Add New Document</h2>
    	<table>
    		<tr><th>Title <span id="tx_chars">500/500</span></th><th>Upload</th></tr>
    	    <tr>
    		    <td><input type="text" name="title" id="title" /></td>
    		    <td>
    		        <input type="file" name="doc" id="doc"/>
    		    </td>
    		</tr>
    	</table>
    	<table>
    	   <tr><th>Description <span id="ds_chars">1000/1000</span></th></tr>
    	   <tr><td><textarea name="description" id="description"></textarea></td></tr>
    	</table>
    	<table>
    	   <tr><td><input type="submit" value="Submit" /></td></tr>
    	</table>
    	</form>
    </div>
	
    <!--Table to Manage existing documents -->	
    <div class="box">
        <h2>Manage Documents</h2>
    	<table>
    		<tr><th>Title</th><th>Description</th><th>File</th><th></th><th></th></tr>
    			<?php
    				$q = 'select * from documents d order by d.title;';
                    $list = db_query($q);
                    foreach($list as $l) { ?>
    					<tr>
    						<td><?php echo $l[title]; ?></td>
    						<td><?php echo $l[description]; ?></td>
    						<td><a href="../../include/doc?i=<?php echo $l[id]; ?>">View</a></td>
    						<td><form method="post" action="edit/"><input type="hidden" name="docid" id="docid" value="<?php echo $l['id']; ?>"/><input type="submit" value="Edit" /></form></td>
    						<td><form method="post" action="delete/"><input type="hidden" name="id" id="id" value="<?php echo $l['id']; ?>"/><input type="submit" value="Delete" /></form></td>
    					</tr>
    			<?php 
    			}
    			?>
    	</table>
    </div>
    
    <script type="text/javascript">
    $(document).ready(function() {
       ccount('title','tx_chars',500);
       ccount('description','ds_chars',1000);
    });
    </script>
<?php require('../include/footer.php'); ?>