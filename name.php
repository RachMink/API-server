<?php

    error_reporting(E_ALL);

    ini_set('display_errors', 1);

    $db = new SQLite3('newDB.db');

    $tablename = "newTable";

    $results = $db->query('SELECT name FROM '. $tablename);

    $data= array();
    while ($row = $results->fetchArray(SQLITE3_ASSOC)){
        array_push($data, $row);
    }

    echo json_encode($data);
?>
