
<?php
#Jainam Shah
#2/16/24
#IT202 - SECTION 006
#Phase 1 - website
#jds227@njit.edu
?>


<html>
    <head> 
        <title> Outdoor Ventures & co</title>
        <link rel = "stylesheet" href = "home.css"/>
        

        <!--make sure you include stylesheet reference here-->
    </head>
    <body> 
        <header>
            <p style = "font-family: Georgia(serif), Garamond(serif), Times, 'Times New Roman', serif; font-size: 15px"> <em>&copy; Jainam Shah </em></p>
        </header> 

        <nav>
            <a href = "home.php"> Home </a> ||
            <a href = "shipping.php"> Shipping </a> ||
            <a href = "database_visualize.php"> Merchandise </a>
        </nav>

        <?php include('header.php');?>
        <main>
            

            <p id = "description"> Hello! Welcome to Outdoor Ventures & co, where we tailor to all your outdoor needs!
                Ever since 1962, we have put out blood and soul into optimizing our customers outdoor expierences.   
                Because of this, we carry a variety of items, from gloves to jackets to fleeces, all hand made to provide maximum comfort for our customers. 
                It is imperative to us that even in the most extreme environments, our customers feel as though they are in the comfort of their home. 
                We are excited to assist you in your journey to conquer the outdoors!</p>
                        <!--grammer check this-->


            <div id = "num1">
                <figure> <img id = "first" src = "images\outdoorimg1.webp" alt = "sunset image" width = 70/></figure>
                <figure> <img id = "second" src = "images\autumntrees.jpg" alt = "Autumn trees" width = 70/> </figure>
                <figure> <img id = "third"  src = "images\river.jpg" alt = "Pretty river" width = 70/> </figure>
            </div>

            <div id = "num2">
                <figure> <img id = "fourth" src = "images\beanieman.webp" alt = "Beanie man" width = 70/> </figure>
                <figure> <img id = "fifth"src = "images\girlwithfleece2.jpg" alt = "Girl with fleeces" width = 70/> </figure>
                <figure> <img id = "sixth"src = "images\redjacket.webp" alt = "Red Jacket" width = 70/> </figure>
            </div>
            
            
            
                
                
        </main>
        <?php include('footer.php');?>

        
    </body>


</html>