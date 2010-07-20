<?php

function db_connect() {
    // $link = mysql_connect('wtbest.org','wtbestor_wtbest','wtb3$t');
    $link = mysql_connect('localhost','root');
    
    if(!$link) {
        die('Could not connect: ' . mysql_error());
    }

    // mysql_select_db('wtbest_wtbestor');
    mysql_select_db('wtbest');
    return $link;
}

function db_disconnect($connection) {
    mysql_close($connection);
}

function db_query($query) {
    $result = mysql_query($query);
    $rows = array();
    $i = 1;
    while($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
        $rows[$i] = $row;
        $i = $i + 1;
    }
    mysql_free_result($result);
    return $rows;
}

function db_update($query) {
    mysql_query($query);
}
?>