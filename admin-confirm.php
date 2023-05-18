<?php
session_start();


 include 'header.php'; 

 $heading = $_SESSION["heading"];
 $trip = $_SESSION["trip"];
 $duration = $_SESSION["duration"];
 $summary = $_SESSION["summary"];

    try {
        error_log("Connecting to DB\n", 0);
        $dbhost = 'localhost';
        $dbname = 'id20619639_assignment3';
        $dbuser = 'id20619639_nate';
        $dbpass = 'Three3333$';
        $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

        $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);


        $sql = "INSERT INTO `admindb` (`Heading`, `TripDate`, `Duration`, `summary`) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);

        $pdo->beginTransaction();
        $stmt->execute([$heading, $trip, $duration, $summary]);
        $pdo->commit();

        ?>
        <label class="title">Assignment Submission - Submitted</label>
        <br>
        <label class="subtitle">Your assignment is successfully submitted.</label>
        <br>
        <?php

    } catch (Exception $e) {
        echo "Error : " . $e->getMessage() . "<br/>";
        error_log("Cannot connect to DB\n", 0);

        ?>
        <label class="title">Assignment Submission - Failed</label>
        <br>
        <label class="subtitle">Encountered technical errors. Please contact system administrator.</label>
        <br>
        <?php
    }
    
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