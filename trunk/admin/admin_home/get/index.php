<?php
$q = 'SELECT m.id, m.org_name, o.name, m.first_name, m.last_name, m.email, m.zip FROM mailing_list m, org_type o WHERE o.id = m.org_type ORDER BY m.org_name, m.first_name, m.last_name, m.email, m.zip;';
$list = db_query($q);
foreach($list as $l) {
?>
<tr id="r<? echo $l[id]; ?>">
    <td><?php echo $l[org_name]; ?></td>
	<td><?php echo $l[name]; ?></td>
    <td><?php echo $l[first_name]; ?></td>
    <td><?php echo $l[last_name]; ?></td>
    <td><?php echo $l[email]; ?></td>
    <td><?php echo $l[zip]; ?></td>
	<td><input type="submit" value="Edit" /></td>
	<td><input type="button" value="Delete" onclick="del('<? echo $l[id]; ?>');"/></td>
</tr>
<?php
}
?>