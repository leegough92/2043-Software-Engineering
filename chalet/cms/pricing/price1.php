<?php
   
    session_start();

    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../../admin.php';
    header("Location:$URL");  
}
    ?>

<?php

include("../../connections/conn.php");

$price1 = mysqli_real_escape_string($conn, $_POST["price1"]);

 if ($price1) {
     
     $queryupdate = "UPDATE pricing SET price1='$price1'";

     $result = mysqli_query($conn, $queryupdate) or die(mysqli_error($conn));
     
     echo $price1 . " <p>Update successful!<br><br>Please click <a href='../index.php'>here</a> to return to CMS</p>";
   
 } else {
     
     echo "You must enter a price!<br><br>Please click <a href='../index.php'>here</a> to return to CMS";
 }



