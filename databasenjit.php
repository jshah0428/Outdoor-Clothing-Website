<?php
#Jainam Shah
#4/19/24
#IT202 - SECTION 006
#Phase 5 - website
#jds227@njit.edu


$config = json_decode(file_get_contents('ignore\config.json'), true);

$host = $config['database']['host'];
$port = $config['database']['port'];
$dbname = $config['database']['dbname'];
$username = $config['database']['username'];
$password = $config['database']['password'];
$dsn = "mysql:host=$host;port=$port;dbname=$dbname";

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