<?php

    //the first two lines allow us to view any errors that might occur on the web-page
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    //create a variable "db" to store the data base that is on the server
    $db = new SQLite3('newDB.db');

    //creates a table variable refrencing newTable in the db
    $tablename = "newTable";
    
    //creates a result variable which queries the database to select all the info from the table where the name key = "Mike"
    //this would allow us to only view "Mike"'s row of information
    $results = $db->query('SELECT * FROM '. $tablename .' WHERE name="Mike"');
    
    //creates a data variable which is an array, 

    //the fetchArray(SQLITE3_ASSOC) returns an array indexed by column name as returned in the corresponding results variable
    //array_push($data, $row) Pushes row elements onto the end of the data array
    $data= array();
    while ($row = $results->fetchArray(SQLITE3_ASSOC)){
        array_push($data, $row);
    }
    
    //returns the JSON representation of the data array
    echo json_encode($data);
?>
