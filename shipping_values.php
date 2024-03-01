<?php
#Jainam Shah
#2/16/24
#IT202 - SECTION 006
#Phase 1 - website
#jds227@njit.edu
    #MAKE SURE YOU ADD PICTURES HERE
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $Street_Address=htmlspecialchars($_POST["streetaddress"]);
    $City = htmlspecialchars($_POST["City"]);
    $State = $_POST["state"];
    $Zip_code = $_POST["Zipcode"];
    $date = htmlspecialchars($_POST["date"]);
    $ordernumber = htmlspecialchars($_POST["ordernumber"]);
    $length =  filter_input(INPUT_POST,'Length', FILTER_VALIDATE_FLOAT);
    $width = filter_input(INPUT_POST,'Width', FILTER_VALIDATE_FLOAT);
    $height = filter_input(INPUT_POST,'Height', FILTER_VALIDATE_FLOAT);
    $valuepack = filter_input(INPUT_POST,'Valuepack', FILTER_VALIDATE_FLOAT); 
    $error_message = "";
    $counter  = 0;
    $chec = True;


    #todo, drop down boxes for states
    #filter validate stuff

    if (empty($firstname) || empty($lastname) || empty($Street_Address) || empty($City) ||  empty($ordernumber) ||empty($Zip_code) || empty($length) || empty($width) || empty($height) || empty($valuepack)){
        $error_message = "You did not input a value for your package information. ";
    }
    else if ($valuepack> 1000 || $length>36 || $width>36 || $height>36 || strlen($Zip_code) !==5 || !is_numeric($Zip_code) ){ 
        $error_message = "The package information is invalid";
    }


        
?>

<html>
    <head>
        <title> Outdoor Ventures & co</title>
        <link rel = "stylesheet" href = "shipping.css">
    </head>

    <body>
        <?php

            if (!empty($error_message)) {
                
                echo "<p class='error_message'>";
                echo $error_message;
                include("shipping.php");
                echo "</p>";
                exit();
                
            }

        ?>

        <header>
            <p style = "font-family: Georgia(serif), Garamond(serif), Times, 'Times New Roman', serif; font-size: 15px"> <em>&copy; Jainam Shah </em></p>
        </header> 

        <nav>
            <a href = "home.php"> Home </a> ||
            <a href = "shipping.php"> Shipping </a> ||
            <a href = "shipping.php"> Merchandise </a>
        </nav>

        <?php
            include("header.php");
        ?>

        <h3> Shipping Label</h3><br>
        <div class = "label">
            <div class = "classes">
                <p id = "jbox"> Next Day Air</p>
                <p id = "sbox"> Priority Mail</p>
            </div>  
            <div class="fbox">
                <p id = "plen"> Package Length: <?php echo $length; #MAKE SURE YOU REDO THIS.?> </p>
                <p id = "wlen"> Package Width: <?php echo $width; #MAKE SURE YOU REDO THIS.?></p>
                <p id = "hlen"> Package Height: <?php echo $height; #MAKE SURE YOU REDO THIS.?></p>
                <p id = "wlen"> Package Value: <?php echo $valuepack . " dollars"; #MAKE SURE YOU REDO THIS.?></p>
            </div>
            
  
                <p id = "from"> From: <br> 139 York Ave. <br> Roselle, IL 60172</p>
                <p id ="to"> To: <br> <?php echo $Street_Address. " "; ?> <br> <?php echo $City . ", ". $State ." ". $Zip_code ; ?> </p>


            <div class = "info">
                <p> Shipping Company: USPS</p>
                <p> Tracking Number: 978123456789 </p>
                <p> Order Number: <?php echo $ordernumber; #MAKE SURE YOU REDO THIS.?></p>
                <p> Ship Date: <?php echo $date;?></p>
            </div>
                <figure style  = "padding-left: 900px;"> <img id = "barcode" src = "images\barcode.png" alt = "barcode" width = 200/></figure>
        </div>
 
        <br>
        <?php include("footer.php")?>
    </body>
</html>



