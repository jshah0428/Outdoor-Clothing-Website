<?php




require_once('databasenjit.php');

$outclotcode = filter_input(INPUT_POST, 'outclotcode');

$query = 'DELETE FROM outclot WHERE outclotcode = :outclotcode';
$statement = $db->prepare($query);
$statement->bindValue(':outclotcode', $outclotcode);
$success = $statement->execute();
$statement->closeCursor();
//potentially get rid of this. 
include("database_visualize.php");

?>