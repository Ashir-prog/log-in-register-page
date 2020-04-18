<?php
    $conn = new PDO('mysql:host=localhost;dbname=db_lms', 'root', 'root');
    
    if (isset($_POST['login'])) {
    	$name = $_POST['username'];
    	$password = $_POST['password'];

    	echo $name.$password;
    }


    if (isset($_POST['register'])) {
    	$name = $_POST['name'];
    	$password = $_POST['password'];
    	$email = $_POST['email'];

    	echo $name.$password.$email;
    }

?>