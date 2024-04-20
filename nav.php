<?php

#Jainam Shah
#4/19/24
#IT202 - SECTION 006
#Phase 5 - website
#jds227@njit.edu

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>


<html>

    <?php if(isset($_SESSION['is_valid_admin'])){?>

        <?php if ($_SESSION['is_valid_admin'] == true){?>

            <nav>
                <a href = "home.php"> Home </a> ||
                <a href = "shipping.php"> Shipping </a> ||
                <a href = "database_visualize.php"> Merchandise </a> ||
                <a href = "create.php"> Add Products</a> ||
                <a href = "logout.php"> Logout</a> ||
                
                        
            </nav>
        <?php }}
        
        else { //($_SESSION['is_valid_admin'] != true) probably don't need this condition
        
        ?>

            <nav>
                <a href = "home.php"> Home </a> ||
                <a href = "shipping.php"> Shipping </a> ||
                <a href = "database_visualize.php"> Merchandise </a> ||
                <a href = "create.php"> Add Products</a> ||
                <a href = "login.php"> Login</a> ||
            
                    
            </nav>

            <?php } ?>
</html>