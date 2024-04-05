<?php
#Jainam Shah
#4/5/24
#IT202 - SECTION 006
#Phase 4 - website
#jds227@njit.edu




$dsn = 'mysql:host=sql1.njit.edu;port=3306;dbname=jds227'; //look at PHPmyadmin for code. 
$username = 'jds227';
$password = 'Jaiking101!';



try{
    $db = new PDO($dsn, $username, $password);

    //echo '<p> you are successfully connects to the njit database<p>'; 
}

catch(PDOException $e){
    $error_message = $e->getMessage(); //use this syntax to access a function. 
    include('database_error.php');
    exit();
}



?>