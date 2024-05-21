
<?php


?>
<html>
    <head>
    <title> Outdoor Ventures & co</title>
    <link rel = "stylesheet" href = "header.css"/>

    </head>

<header>
    
    <h1> Outdoor Ventures & co</h1>
    <?php if (isset($_SESSION['is_valid_admin'])){ ?>
        <div id="names">
            <label> Successfully Logged in!</label><br>

            <label> First Name: <?php echo $_SESSION['fname'] ?> </label> <br>
            <label> Last Name: <?php echo $_SESSION['lname'] ?> </label> <br>
            <label> Email: <?php echo $_SESSION['email'] ?> </label> <br>
        </div>

    <?php } ?>
    
</header>
</html>