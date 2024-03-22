<?php
#Jainam Shah
#3/22/24
#IT202 - SECTION 006
#Phase 3 - website
#jds227@njit.edu
require_once("databasenjit.php");

$query = 'SELECT * 
        FROM outclotCategories
        ORDER BY outclotCategoryID';
$statementexec = $db->prepare($query);
$statementexec->execute();
$diffcats = $statementexec->fetchAll();
$statementexec->closeCursor();


 
                            

?>



<html>
     <head>
        <title>Outdoor Ventures & co</title>
        <link rel="stylesheet" href= create.css />
    </head>

    <body>
        <header>
            <p style = "font-family: Georgia(serif), Garamond(serif), Times, 'Times New Roman', serif; font-size: 15px"> <em>&copy; Jainam Shah </em></p>
        </header>
        
        <nav>
            <a href = "home.php"> Home </a> ||
            <a href = "shipping.php"> Shipping </a> ||
            <a href = "database_visualize.php"> Merchandise </a> ||
            <a href = "create.php"> Add Products</a>
        </nav>
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

        <figure> <img id = "first2" src = "images\money.avif" alt = "dollar sign" width = 100/></figure>
        <figure> <img id = "second2" src = "images\shopping_cart.jpg" alt = "shoppping cart" width = 70/></figure>
                  
        <?php include('footer.php');?>
        <!-- make sure you add figure elements-->


    </body>



</html>