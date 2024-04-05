<?php
#Jainam Shah
#4/5/24
#IT202 - SECTION 006
#Phase 4 - website
#jds227@njit.edu
require_once("databasenjit.php");

$query = 'SELECT * 
        FROM outclotCategories
        ORDER BY outclotCategoryID';
$statementexec = $db->prepare($query);
$statementexec->execute();
$diffcats = $statementexec->fetchAll();
$statementexec->closeCursor();


 
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

        <h2>Add a Product</h2>

        <div id = "form">
            <h2> Product Information </h2>
        <main>
            <form action = "create_new_product.php" method = "post">
            <label> Category Type: </label>
            <select name = "outclotCategoryID">
                <?php foreach ($diffcats as $cat):?>
                    <option value = '<?php echo $cat["outclotCategoryID"];?>'>
                        <?php echo $cat["outclotCategoryName"];?>
                    </option>   
                <?php endforeach;?>

                </select><br>
                
            
            <label>Code:</label>
            <input type="text" name="code"><br>

            <label>Name:</label>
            <input type="text" name="name"><br>

            <label>Description:</label>
            <textarea id="descrip" name="description" rows = "4"></textarea><br>

            <label>Price (Cannot be over 450 dollars):</label>
            <input type="number" name="price" min = 0 max = 450 step = 0.01><br>

            <label>Color:</label>
            <input type="text" name="color"><br>

            <input type = "reset" value = "Clear all values">
            <input type = "submit" value = "Create New Product"> 

                </form>

        </main>
        </div>

        <div class="images-div" style="
    display: flex;
    justify-content: space-between;
    width: 100%;
    align-items: center;
    ">
        <figure> <img id = "first2" src = "images\money.avif" alt = "dollar sign" width = 100/></figure>
        <figure> <img id = "second2" src = "images\shopping_cart.jpg" alt = "shoppping cart" width = 70/></figure>
                
                </div>
        <?php include('footer.php');?>
        <!-- make sure you add figure elements-->


    </body>



</html>