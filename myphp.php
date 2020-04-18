<?php
    $servername = "localhost";
    $username = "admin";
    $password = "123";

    $conn = new mysql(localhost, admin, 123);

    if ($conn->connect_error){
        die("Connectin failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

        $sql = "CREATE DATABASE myDB";
        if ($conn->query($sql) ===TRUE){
            echo "Database created successfully";
        }else {
            echo "Error creating database: " .$conn->connect_error;
        }
        $conn->close();
    ?>