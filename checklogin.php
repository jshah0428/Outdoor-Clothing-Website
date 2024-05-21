<?php


//recieves post request from either the login or logout page. Implement this later. First do the front end. 
require_once("getpw.php");

session_start();

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if (correctlogin($email, $password)) {
    //valid login
//create an entry in the $_SESSION super global array. 
    echo '<div id = "error">' . 'Successfully Logged in' . '</div>';


    $_SESSION['is_valid_admin'] = true;

    require_once("functiondatabasenjit.php");
    $db = getdb();
    $query = 'SELECT firstName, lastName FROM outclotManagers WHERE emailAddress = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $info = $statement-> fetch();

    $_SESSION['fname'] = $info['firstName'];
    $_SESSION['lname'] = $info['lastName'];
    $_SESSION['email'] = $email;



}
else{ //also have to handle cases where either user or password is not given or if the credentials are wrong. 

        //code for invalid login

     if ($email == NULL || $password == NULL) {
    
      echo '<div id = "error">' . 'You must login to view this page. One of the fields is empty.' . '</div>' ; //$login_message =
    
     } else {
    
     echo '<div id = "error">' .  'Invalid credentials.' . '</div>'; // $login_message =
    
     }
     include("login.php");
     exit();

}




?>

<html>
    <head>
        <title>Outdoor Ventures & co</title>
        <link rel="stylesheet" href= "create.css" />
        
    </head>

    <body>
        <header>
            <p style = "font-family: Georgia(serif), Garamond(serif), Times, 'Times New Roman', serif; font-size: 15px"> <em>&copy; Jainam Shah </em></p>
        </header>
        
        <?php
            include("nav.php");
        ?>
        <?php include('header.php');?>

        <div class="images-div" style="
    display: flex;
    justify-content: space-between;
    width: 100%;
    align-items: center;
">
        <figure > <img style = "width:400px;height:300px"   src = "images\two_people.jpg" alt = "two people" width = 200/></figure>
        <figure > <img style = "width:400px;height:300px"  src = "images\tent.jpg" alt = "tent" width = 70/></figure>
        </div>
    </body>
   
   

    <?php include('footer.php');?>
</html>