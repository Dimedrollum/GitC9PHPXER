<?php
    $database = new mysqli('instance40644.db.xeround.com', 'dll', 'D4rkS!de', 'GitC9PHPXER', '3443');
    
    if($database->connect_erno>0){
        echo 'Database error'. $database->connect_error;
    }else{
        echo 'Connected';
    }
    $query = 'SELECT * FROM persons';
    $result = $database->query($query);
    
    if (!$result){
        echo 'Database query Error';
    }else{
        $result;
    }