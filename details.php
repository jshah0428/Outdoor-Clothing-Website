<?php

require_once('databasenjit.php');

$outclotID = filter_input(INPUT_GET, 'outclot_ID', FILTER_VALIDATE_INT);


$query = 'SELECT * FROM outclot WHERE outclotID = :outclotID';

$statement = $db->prepare($query);
$statement -> bindValue(':outclotID', $outclotID); //binds whatever the outclotID is over here. 
$statement->execute();
$info = $statement->fetchAll();
$statement->closeCursor();

$query2 = 'SELECT outclotCategoryID,outclotCategoryName FROM outclotCategories';
$statement2 = $db->prepare($query2);
$statement2->execute();
$categorytonameinfo = $statement2->fetchAll();
$statement2->closeCursor();

$query3 = 'SELECT outclotID FROM outclot';
$statement3 = $db->prepare($query3);
$statement3->execute();
$alloutclotid = $statement3->fetchAll();
$statement3->closeCursor();

$flag = false;


?>

<html>
    <head>
        <title>Outdoor Ventures & co</title>
        <link rel="stylesheet" href= "detail1.css" />
    </head>


    <body>
        <header>
            <p style = "font-family: Georgia(serif), Garamond(serif), Times, 'Times New Roman', serif; font-size: 15px"> <em>&copy; Jainam Shah </em></p>
        </header> 

        

        <?php include("nav.php");?>

        <?php include('header.php');?>

    
    <body>
        <h2>Product Information</h2>

        <main>
            <?php 
                $flag = false;
                
                foreach ($alloutclotid as $r):
                if($r['outclotID'] == $outclotID){
                   
                    $flag = true;
                } 
            endforeach;
            
            if ($flag == false){ ?>
                <h2> Invalid OUTCLOT - ID</h2> <!-- fix this-->
                
           <?php exit;
        }?>
           <div id ="attributes"> 
            <table><!-- makes a table -->
                <tr><!-- t4 = table row!-->
                    <th>ID NUMBER</th><!-- th = table header!-->
                    <th>CATEGORY</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>COLOR</th>  
                    <th>PRICE</th>
                    <th>IMAGE</th>  
                </tr>
                <?php foreach ($info as $infoarr) : ?>
                    <tr>
                        <td><?php echo $infoarr['outclotCode']?></td>  <!-- MAY POTENTIALL NEED THIS LATER ?product_id=<?//php echo urlencode($infoarr['outclotID'])?>!-->
                        
                        <td><?php foreach($categorytonameinfo as $name):
                            if($name['outclotCategoryID'] == $infoarr['outclotCategoryID']){ 
                                echo $name['outclotCategoryName'];

                            } endforeach?></td>
                            
                        


                        <td><?php echo $infoarr['outclotName']; ?></td> 
                        <td><?php echo $infoarr['description']; ?></td> 
                        <td><?php echo $infoarr['color']; ?></td>
                        <td><?php echo $infoarr['price']; ?></td>
                        <td> <figure> <img src="images/<?php echo $infoarr['outclotCode']; ?>.jpg" width="100" height="120"></figure></td>
                    </tr>
                <?php endforeach; ?>      
            </table>
            </div>
        </main>
        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
        <!-- include jquery library (copy-paste) -->
        <script src="details.js"></script>
        <?php include('footer.php');?>
    </body>

    
    
</html>
