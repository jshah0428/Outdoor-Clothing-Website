<?php
#Jainam Shah
#4/19/24
#IT202 - SECTION 006
#Phase 5 - website
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
            <form onsubmit = "return validate(this)" action = "create_new_product.php" method = "post" name = "create_form" id = "create_form">
            <label> Category Type: </label>
            <select name = "outclotCategoryID">
                <?php foreach ($diffcats as $cat):?>
                    <option value = '<?php echo $cat["outclotCategoryID"];?>'>
                        <?php echo $cat["outclotCategoryName"];?>
                    </option>   
                <?php endforeach;?>

                </select><br>
                
            
            <label>Code:</label>
            <input type="text" name="code" id = "code">
            <span id = "codespan"></span><br>

            <label>Name:</label>
            <input type="text" name="name" id = "name" >
            <span id = "namespan"></span><br>

            <label>Description:</label>
            <textarea id="descrip" name="description" rows = "4" id ="description"></textarea>
            <span id = "descripspan"></span><br>

            <label>Price (Cannot be over 100,000 dollars):</label>
            <input id = "price" type="number" name="price" min = 0 max = 100000 step = 0.01>
            <span id = "pricespan"></span><br>

            <label>Color:</label>
            <input type="text" name="color" id = "color">
            <span id = "colorspan"></span><br>
            
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
        
        
            <!-- copy/paste the CDN from releases.jquery.com-->
            <script
            src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>

            <script>
                function validate(form){      
                    let check = true;
                    const code = $("#code").val();
                    const name = $("#name").val();
                    const description = $("#descrip").val();
                    const price = $('#price').val();
                    const color = $('#color').val();

                    


                    if (code === "") {
                        $("#codespan").text("This field is required.");
                        check = false;
                    } else if (code.length < 4) {
                        $("#codespan").text("Your code is too short.");
                        console.log('hello')
                        check = false;
                    } else if (code.length > 10) {
                        $("#codespan").text("Your code is too long.");
                        check = false;
                    }

                    if (name === "") {
                        $("#namespan").text("This field is required.");
                        check = false;
                    } else if (name.length < 10) {
                        $("#namespan").text("Your name is too short.");
                        check = false;
                    } else if (name.length > 100) {
                        $("#namespan").text("Your name is too long.");
                        check = false;
                    }

                    if (description === "") {
                        $("#descripspan").text("This field is required.");
                        check = false;
                    } else if (description.length < 10) {
                        $("#descripspan").text("Your description is too short.");
                        check = false;
                    } else if (description.length > 255) {
                        $("#descripspan").text("Your description is too long.");
                        check = false;
                    }

                    if (price === "") {
                        $("#pricespan").text("This field is required.");
                        check = false;
                    } else if (price <=0) {
                        $("#pricespan").text("Your price is to low.");
                        check = false;
                    } else if (price > 100000) {
                        $("#pricespan").text("Your price is to high");
                        check = false;
                    }

                    if (color === "") {
                        $("#colorspan").text("This field is required.");
                        check = false;
                    } else{
                        for (var x=0; x<color.length; x++){
                            if (!isNaN(color[x])){
                                $("#colorspan").text("Not a color.");
                                check = false
                                break;
                            }


                        }
                    }
                    


                    
                    return check;
                            
        
                }
            </script>

    </body>



</html>