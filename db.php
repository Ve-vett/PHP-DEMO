<?php 
    $hostname = "localname";
    $username = "root";
    $password = "";
    $db_name = "attendance_db";
    
    $conn = new mysqli($hostname, $username, $password, $db_name);
    if ($conn) {
        echo "Database is Connected";
    } else {
        echo "Error";
    }

    //Select all data
    $query = $conn->query("SELECT * FROM student");
    $data = $conn->fetch_all(MYSQLI_ASSOC);
    echo "$<br>";
    echo "$<br>";
    echo "$Data in attedance tables";
    foreach ($data as $row) {
    echo "$<br>";
    echo "$<br>";
    echo $row["student_id"], "<br>";
    echo $row["name"], "<br>";
    }

; ?>