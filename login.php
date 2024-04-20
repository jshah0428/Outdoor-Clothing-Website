<?php
#Jainam Shah
#4/19/24
#IT202 - SECTION 006
#Phase 5 - website
#jds227@njit.edu
if (!isset($email)){
    $email = "";
}

if (!isset($password)){
    $password = "";
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
        <main> 
            <div id = "form">
                <h2> Login here </h2>
                <form action = "checklogin.php" method = "post">
                    <label> Email: </label>
                    <input type = "text" name =  "email"/> <!-- might have to add a value part, look that later -->
                    <br>
                    <label> Password:</label>
                    <input type="password" name="password"/>
                    <br>
                    <input type="submit" value="Login"/>
                </form>
            </div>
        </main>
        
    
    
           
    <figure> <img id = "first3" src = "images\two_people.jpg" alt = "two people" width = 200/></figure>
    <figure> <img id = "second3" src = "images\tent.jpg" alt = "tent" width = 70/></figure>
</body>
           
    <?php include('footer.php');?>



</html>