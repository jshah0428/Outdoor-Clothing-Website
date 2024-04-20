<?php
#Jainam Shah
#4/19/24
#IT202 - SECTION 006
#Phase 5 - website
#jds227@njit.edu



function getdb(){
    $dsn = 'mysql:host=sql1.njit.edu;port=3306;dbname=jds227'; //look at PHPmyadmin for code. 
    $username = 'jds227';
    $password = 'Jaiking101!';



    try{
        $db = new PDO($dsn, $username, $password);

    }

    catch(PDOException $e){
        $error_message = $e->getMessage(); //use this syntax to access a function. 
        include('database_error.php');
        exit();
    }

    return $db;

}


?>