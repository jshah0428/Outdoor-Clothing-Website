<?php
#Jainam Shah
#4/19/24
#IT202 - SECTION 006
#Phase 5 - website
#jds227@njit.edu
session_start();

$_SESSION = [];  // Clear all session data from memory

session_destroy();     // Clean up the session ID

echo '<link rel="stylesheet" href="create.css">';



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
    
    echo "<h2 id='error99'> ". 'You have been logged out.' . '</h2>';
    

include('login.php');

?>



