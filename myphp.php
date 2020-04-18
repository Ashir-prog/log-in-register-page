<?php
    $conn = new PDO('mysql:host=localhost;dbname=db_lms', 'root', 'root');
    if ($conn) {
        echo "connected successifully to the database";
    }else{
        echo "failed to connect to the database";
    }

?>