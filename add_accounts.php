<?php
#Jainam Shah
#4/5/24
#IT202 - SECTION 006
#Phase 4 - website
#jds227@njit.edu

// function outdoor_ventures_co_Managers($email, $password, $firstName, $lastName) {
//     $db = getDB();
//     require_once("functiondatabasenjit.php");
//     $hash = password_hash($password, PASSWORD_DEFAULT);
//     $query = 'INSERT INTO outdoor_ventures_co_Managers (emailAddress, password, firstName, lastName, dateCreated)
//               VALUES (:email, :password, :firstname, :lastname,  NOW() )';
//     $statement = $db->prepare($query);
//     $statement->bindValue(':email', $email);
//     $statement->bindValue(':password', $hash);
//     $statement->bindValue(':firstname', $firstName);
//     $statement->bindValue(':lastname', $lastName);
//     $statement->execute();
//     $statement->closeCursor();
//  }

//  outdoor_ventures_co_Managers("bob.bob@gmail.com", "bobob", "Bob", "Bobby");
//  outdoor_ventures_co_Managers("jay.jay@gmail.com", "JaySmith", "Jay", "Smith");
//  outdoor_ventures_co_Managers("salamander@gmail.com", "smay88", "Sally", "May");
//  outdoor_ventures_co_Managers("emily.smith@gmail.com", "smitty", "Emily", "Smith");
//  outdoor_ventures_co_Managers("suzzycollins@gmail.com", "scoll", "Suzzy", "Collins");

//I spent excessive time debugging this, but unfortunately, for some reason, this table did not work. Thus, I had to make a new table on the bottom. 


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

 

//ask if I made this page correctly. Also say how I executed all this in the PHPmyadmin data base. Do I need this code or nah. 
?>