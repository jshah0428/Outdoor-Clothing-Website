<?php

#Jainam Shah
#3/22/24
#IT202 - SECTION 006
#Phase 3 - website
#jds227@njit.edu
function uniquenes_error($db, $code){
    require_once("databasenjit.php");
    $error_message = '';
    $query = 'SELECT outclotcode FROM outclot';
    $news = $db->prepare($query);
    $news->execute();

    $oldcodes = $news->fetchAll();

    foreach ($oldcodes as $val){
        if ($val['outclotcode'] == $code){
            
            $error_message = "You have repeated a Code. Please use a unique code.";
            echo '<div id = "error2">' . $error_message . '</div>';
            include('create.php');
            exit();
        }
    }

    
}
$catid = filter_input(INPUT_POST, 'outclotCategoryID', FILTER_VALIDATE_INT);
$outclotcode = filter_input(INPUT_POST, 'code');
$outclotname = filter_input(INPUT_POST, 'name');
$outclotdescriptions = filter_input(INPUT_POST, 'description');
$outclotprice = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT); 
//above value must be checked for positiveness and a mac value. 
$outclotcolor = filter_input(INPUT_POST, 'color');
$error_message = '';

echo '<link rel="stylesheet" type="text/css" href="create.css">';

if ($outclotcode == NULL || $outclotname == NULL || $outclotdescriptions == NULL || $outclotcolor == NULL || $outclotprice == NULL){ //$outclotprice == NULL ||

    $error_message = "One of the values is empty";
    
    
}

/*else if($outclotprice == FALSE){
    $error_message = "Price has the wrong input type";


} ask if i actually need this.*/

/* ASK ABOUT THIS IF STATEMENT!!!*/
else if($outclotprice <0){
    $error_message  = "Price is to low";
}
else if ($outclotprice >450){
    $error_message = "Price exceeds maximum value of 450 dollars. ";
}


if (!empty($error_message)){
        echo '<div id = "error">' . $error_message . '</div>';
        include("create.php");
        exit(); //make sure this happens in the original page. 

}

else{
    require_once("databasenjit.php");
    $query = 'INSERT INTO outclot
    (outclotCategoryID, outclotCode, outclotName, description, color, price, dateCreated)
    VALUES
    (:catid, :outclotcode, :outclotname, :outclotdescriptions, :outclotcolor, :outclotprice, NOW())';

    $statementexec = $db->prepare($query);
    $statementexec->bindValue(':catid', $catid);
    $statementexec->bindValue(':outclotcode', $outclotcode);
    $statementexec->bindValue(':outclotname', $outclotname);
    $statementexec->bindValue(':outclotdescriptions', $outclotdescriptions);
    $statementexec->bindValue(':outclotcolor', $outclotcolor);
    $statementexec->bindValue(':outclotprice', $outclotprice);

    uniquenes_error($db, $outclotcode);

    $final = $statementexec->execute();
    $statementexec->closeCursor();

    echo "<p id = 'success' >" . "Successfully added an element". "</p>";
    include("create.php");
    

    

}

//questions, look above, very important. 
//ask if it is ok if it is impossible to add a letter to it. that way we don't need error handling.


?>