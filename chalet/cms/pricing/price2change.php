<?php
   
    session_start();

    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../../admin.php';
    header("Location:$URL");  
}
    ?>

<?php

include("../../connections/conn.php");

$price2title = mysqli_real_escape_string($conn, $_POST["price2title"]);

 if ($price2title) {
     
     $queryupdate = "UPDATE pricing SET price2title='$price2title'";

     $result = mysqli_query($conn, $queryupdate) or die(mysqli_error($conn));
     
     echo $price2title . " <p>Update successful!<br><br>Please click <a href='../index.php'>here</a> to return to CMS</p>";
   
 } else {
     
     echo "You must enter a title!<br><br>Please click <a href='../index.php'>here</a> to return to CMS";
 }

