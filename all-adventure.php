<?php
session_start();


 include 'header.php'; 

 $heading = $_SESSION["heading"];
 $trip = $_SESSION["trip"];
 $duration = $_SESSION["duration"];
 $summary = $_SESSION["summary"];

   
?>

<html>
   
    <body>



        <label class="title">Confirmation Page</label>
        <br>
        <label class="subtitle">Please confirm the following details on the next page. </label>
        <br>
       
        <br/>
        <a href="all-adventure.php">Confirm and Proceed</a>



        <?php include 'footer.php'; ?>


    </body>
</html>