<?php
    
    //prints errors that might occur on the webpage
    error_reporting(E_ALL);

    ini_set('display_errors', 1);

    $db = new SQLite3('newDB.db');

    $tablename = "newTable";
    
    //queries everything from the table
    $results = $db->query('SELECT * FROM '. $tablename);

    $data= array();
    while ($row = $results->fetchArray(SQLITE3_ASSOC)){
        array_push($data, $row);
    }
    
    //prints the JSON format of the data array on the webpage
    echo json_encode($data);
?>
