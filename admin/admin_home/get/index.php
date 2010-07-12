<?php
//<!-- admin/admin_home/get/index.php : is called by admin_home/index to process query to view
//	the existing mailing list -->
$q = 'SELECT m.id, m.org_name, o.name, m.first_name, m.last_name, m.email, m.zip FROM mailing_list m, org_type o WHERE o.id = m.org_type ORDER BY m.org_name, m.first_name, m.last_name, m.email, m.zip;';
$list = db_query($q);
foreach($list as $l) {
?>
<tr id="<?php echo $l[id]; ?>">
    <td><?php echo $l[org_name]; ?></td>
	<td><?php echo $l[name]; ?></td>
    <td><?php echo $l[first_name]; ?></td>
    <td><?php echo $l[last_name]; ?></td>
    <td><?php echo $l[email]; ?></td>
    <td><?php echo $l[zip]; ?></td>
	<td><form method="post" action="edit/" ><input type="hidden" name="docid" id="docid" value="<?php echo $l['id']; ?>"/><input type="submit" value="Edit" /></form></td> 
	<td><form method="post" action="delete/"><input type="hidden" name="id" id="id" value="<?php echo $l['id']; ?>"/><input type="submit" value="Delete" /></form></td>
    				
<!--	<td><input type="button" value="Delete" onclick="del('<?// echo $l[id]; ?>');"/></td> -->
</tr>
<?php
}
?>