<?php
function outdoor_ventures_co_Managers($email, $password, $firstName, $lastName) {
    
    require_once("functiondatabasenjit.php");
    $db = getdb();
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = 'INSERT INTO outclotManagers (emailAddress, password, firstName, lastName, dateCreated)
              VALUES (:email, :password, :firstname, :lastname,  NOW() )';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $hash);
    $statement->bindValue(':firstname', $firstName);
    $statement->bindValue(':lastname', $lastName);
    $statement->execute();
    $statement->closeCursor();
 }

 outdoor_ventures_co_Managers("bob.bob@gmail.com", "bobob", "Bob", "Bobby");
 outdoor_ventures_co_Managers("jay.jay@gmail.com", "JaySmith", "Jay", "Smith");
 outdoor_ventures_co_Managers("salamander@gmail.com", "smay88", "Sally", "May");
 outdoor_ventures_co_Managers("emily.smith@gmail.com", "smitty", "Emily", "Smith");
 outdoor_ventures_co_Managers("suzzycollins@gmail.com", "scoll", "Suzzy", "Collins");

 

?>