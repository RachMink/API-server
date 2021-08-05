<?php

    //the first two lines allow us to view any errors that might occur on the web-page
    error_reporting(E_ALL);

    ini_set('display_errors', 1);

    $db = new SQLite3('newDB.db');

    $tablename = "newTable";
    
    //queries all the name information fields from the table
    $results = $db->query('SELECT name FROM '. $tablename);

    $data= array();
    while ($row = $results->fetchArray(SQLITE3_ASSOC)){
        array_push($data, $row);
    }
    
    //prints the JSON format of the all information from the data array which includes all the names from the database table
    echo json_encode($data);
?>
