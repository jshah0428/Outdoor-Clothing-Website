
<?php
#Jainam Shah
#4/19/24
#IT202 - SECTION 006
#Phase 5 - website
#jds227@njit.edu
?>

<?php

session_start();
if(!isset($_SESSION['is_valid_admin'])){
    echo "<style>#error99 {
        font-family: Georgia, Garamond, Times, 'Times New Roman', serif;
        font-size: 35px;
        color: #b78565;
        position: fixed;
        bottom: 300px; 
        left: 45%; 
        transform: translateX(-50%); 
        z-index: 999; 
    }</style>";
    
    echo "<h2 id='error99'>" . "Error: User is not logged in." . "</h2>";
    
    include("login.php");
    exit();
}

?>

<html>
    <head>
        <link rel = "stylesheet" href = "shipping.css">
        <title> Outdoor Ventures & co</title>

    </head>

    <body>
       

        <header>
            <p style = "font-family: Georgia(serif), Garamond(serif), Times, 'Times New Roman', serif; font-size: 15px"> <em>&copy; Jainam Shah </em></p>
        </header> 


        <?php include("nav.php");?>

        <?php include('header.php');?>



        <h2>Shipping Information</h1>

        <div id = "body">
        <main>
       
            
            <h3> Personal Information</h3>
            <form action = "shipping_values.php" method = "post"> <!-- this means that the action after submission is going to the shipping values place!-->
            <label>First Name</label>
            <input type="text" name="firstname"/><br>
            <label>Last Name</label>
            <input type="text" name="lastname" /><br>
            <label>Street Address</label>
            <input type="text" name="streetaddress" /><br>
            <label>City</label>
            <input type="text" name="City"/><br>
            <label>State</label>
            <select name="state"> 
                <option value = "AL"> AL</option>
                <option value = "AK"> AK </option>
                <option value = "AZ"> AZ </option>
                <option value = "AR"> AR </option>
                <option value = "CA"> CA </option>
                <option value = "CO"> CO </option>
                <option value = "CT"> CT </option>
                <option value = "DE"> DE </option>
                <option value = "FL"> FL </option>
                <option value = "GA"> GA </option>
                <option value = "HI"> HI </option>
                <option value = "ID"> ID </option>
                <option value = "IL"> IL </option>
                <option value = "IN"> IN </option>
                <option value = "IA"> IA </option>
                <option value = "KS"> KS </option>
                <option value = "KY"> KY </option>
                <option value = "LA"> LA </option>
                <option value = "ME"> ME</option>
                <option value = "MD"> MD</option>
                <option value = "MA"> MA </option>
                <option value = "MI"> MI </option>
                <option value = "MN"> MN</option>
                <option value = "MS"> MS</option>
                <option value = "MO"> MO</option>
                <option value = "MY"> MT</option>
                <option value = "NE"> NE</option>
                <option value = "NV"> NV</option>
                <option value = "NH"> NH</option>
                <option value = "NJ"> NJ</option>
                <option value = "NM"> NM</option>
                <option value = "NY"> NY</option>
                <option value = "NC"> NC</option>
                <option value = "ND"> ND</option>
                <option value = "OH"> OH</option>
                <option value = "OK"> OK</option>
                <option value = "OR"> OR</option>
                <option value = "PA"> PA</option>
                <option value = "RI"> RI</option>
                <option value = "SC"> SC</option>
                <option value = "SD"> SD</option>
                <option value = "TN"> TN</option>
                <option value = "TX"> TX</option>
                <option value = "UT"> UT</option>
                <option value = "VT"> VT</option>
                <option value = "VA"> VA</option>
                <option value = "WA"> WA</option>
                <option value = "WV"> WV</option>
                <option value = "WI"> WI</option>
                <option value = "WY"> WY</option>
            </select>  <br>  
            
                
            <label>Zip Code</label>
            <input type="text" name="Zipcode" /><br>
            <h3> Other Information </h3>
            <label>Date </label>
            <input type = "date" name = "date"/><br>
            <label>Order Number </label>
            <input type="text" name="ordernumber" /><br>
            <label>Length of the Package </label>
            <input type="text" name="Length" /><br>
            <label>Width of the Package </label>
            <input type="text" name="Width" /><br>
            <label>Height of the Package </label>
            <input type="text" name="Height" /><br>
            <label>Value of the Package $ </label>
            <input type="text" name="Valuepack" /><br>

            <input type = "submit" value = "Enter"/>



            
            </form>

        
        </main>
        </div>
        <figure> <img id = "first2" src = "images\women.webp" alt = "women with sweather" width = 70/></figure>
        <figure> <img id = "second2" src = "images\patag.jpg" alt = "sunset image" width = 70/></figure>
        <?php include('footer.php');?>
        
    </body>

    
    


</html>
