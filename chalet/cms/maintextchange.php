<?php
    session_start();
    
    if(!isset($_SESSION["brc_40156316"])){
    
    $URL = '../admin.php';
    header("Location:$URL");  
}
    ?>

<?php

include("../connections/conn.php");

$homedata = mysqli_real_escape_string($conn, $_POST["maintextchange"]);




 if ($homedata) {
     
     $queryupdate = "UPDATE brchome SET brcintro='$homedata'";

     $result = mysqli_query($conn, $queryupdate) or die(mysqli_error($conn));
     
      echo $homedata . " <p>Update successful!<br><br>Please click <a href='index.php'>here</a> to return to CMS</p>";
   
 } else {
     
     echo "You must enter text!<br><br>Please click <a href='index.php'>here</a> to return to CMS";
     
 }

