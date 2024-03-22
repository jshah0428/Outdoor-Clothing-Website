<?php


#Jainam Shah
#3/22/24
#IT202 - SECTION 006
#Phase 3 - website
#jds227@njit.edu

//new version of slide 24
$dsn = 'mysql:host=sql1.njit.edu;port=3306;dbname=jds227'; //look at PHPmyadmin for code. 
$username = 'jds227';
$password = 'Jaiking101!';


try{
    $db = new PDO($dsn, $username, $password);;
}

catch(PDOException $e){
    $error_message = $e->getMessage(); //use this syntax to access a function. 
    include('database_error.php');
    exit();
}

$outclotCategoryID = filter_input(INPUT_GET, 'outclotCategoryID', FILTER_VALIDATE_INT);
if ($outclotCategoryID == NULL || $outclotCategoryID == FALSE){
    $outclotCategoryID = 1;
}


$queryCategories = 'SELECT * FROM outclotCategories
             ORDER BY outclotCategoryID';
$statement1 = $db->prepare($queryCategories);
$statement1->execute();
$outclotcategories = $statement1->fetchAll(); //this should fetch all categories
$statement1->closeCursor();


$queryValues = 'SELECT  * FROM outclot
WHERE outclotCategoryID = :outclotCategoryID
ORDER BY outclotID';
$statement2 = $db->prepare($queryValues);
$statement2->bindValue(':outclotCategoryID', $outclotCategoryID);
$statement2->execute();
$info = $statement2->fetchAll();
$statement2->closeCursor();
?>



<html>

    <head>
        <title>Outdoor Ventures & co</title>
        <link rel="stylesheet" href= dbvisual.css />
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

        <h2>Product Information</h2>


        <main>
                <div id = "links">
                    <label id = "p"> Products</label>
                    <?php foreach ($outclotcategories as $category) : ?>
                        <li>
                            <a href="?outclotCategoryID=<?php 
                                echo $category['outclotCategoryID']; 
                            ?>" id="attlink">
                            <?php echo $category['outclotCategoryName']; ?></a>
                        </li>

                    <?php endforeach; ?>
                    </div>

                        <div id= "attributes">
                            <table><!-- makes a table -->
                                <tr><!-- t4 = table row!-->
                                    <th>Code</th><!-- th = table header!-->
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Color</th>
                                    <th>Price</th>
                                    </tr>

                        <?php foreach ($info as $infoarr) : ?>
                                <tr>
                                    <td><?php echo $infoarr['outclotCode']; ?></td> 
                                    <td><?php echo $infoarr['outclotName']; ?></td> 
                                    <td><?php echo $infoarr['description']; ?></td> 
                                    <td><?php echo $infoarr['color']; ?></td>
                                    <td><?php echo $infoarr['price']; ?></td>
                                </tr>
                        <?php endforeach; ?>      
                                </table>
                        </div>
                            

                </select>
                <section>

        

        </main>
        <figure> <img id = "first2" src = "images\boots_phase_2.jpg" alt = "boots" width = 100/></figure>
        <figure> <img id = "second2" src = "images/winter_jacket_phase_2.jpg" alt = "winter jacket" width = 70/></figure>
        <?php include('footer.php');?>
    </body>

</html>

