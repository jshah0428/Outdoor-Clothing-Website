<?php

 //helps establish connection in order to make sure that this script can access the data base. 
    //make a function that selects the email and address from the data base.
    require_once("functiondatabasenjit.php"); 
    function correctlogin($email, $password){
        $db = getdb();
        $query = 'SELECT password FROM outclotManagers WHERE emailAddress = :email'; //last part basically holds :email as a placehold for emailAddress
        $execution = $db->prepare($query);
        $execution->bindValue(':email', $email); //this helps pick the specific email address that was inputted. 
        $execution -> execute();
        $row = $execution->fetch();
        $execution->closeCursor();
    

        if ($row === false){
            
            return false;
            
        }
        else{

            $hash = $row['password'];

            return password_verify($password, $hash);

        }
   
    } 

    //from here, make another file that uses this function to check if the person is logged in correctly. 
    
   // $_SESSION['is_valid_admin'] =true;

?>