<?php
require_once('../../include/database.php');
$link=db_connect();
$dt = addslashes($_POST[date]);
$tm = addslashes($_POST[time]);
$ds = addslashes($_POST[description]);
try {
    db_update("INSERT INTO events VALUES (0,'" . $dt . "','" . $tm . "','" . $ds . "');");
    $list = db_query("SELECT e.id FROM events e WHERE e.date='" . $dt . "' AND e.time='" . $tm . "' AND e.description='" . $ds . 
        "';");
    $id=$list[1][id];
    ?>
    <tr id="r<? echo $id; ?>">
        <td><? echo date_format(date_create($dt),"l F j"); ?></td>
        <td><? echo date_format(date_create($tm),"h:iA"); ?></td>
        <td><? echo $ds; ?></td>
        <td><input type="button" value="Edit" /></td>
        <td><input type="button" value="Delete" onclick="del('<? echo $id; ?>');"/></td>
    </tr>
<?php    
} catch (Exception $e){
    
}
db_disconnect($link);
?>