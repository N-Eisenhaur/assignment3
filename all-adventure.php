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

    <?php

try {
    error_log("Connecting to DB\n", 0);
    $dbhost = 'localhost';
    $dbname = 'id20619639_assignment3';
    $dbuser = 'id20619639_nate';
    $dbpass = 'Three3333$';
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

    $query = "SELECT Heading, TripDate, Duration, Summary FROM admindb";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $stmt->bindColumn('Heading', $heading);
    $stmt->bindColumn('TripDate', $trip);
    $stmt->bindColumn('Duration', $duration);
    $stmt->bindColumn('Summary', $summary);
    while ($row = $stmt->fetch(PDO::FETCH_BOUND)) {
        echo "<tr>";
        echo "<td>" . $heading . "</td>";
        echo "<td>" . $email . "</td>";
        echo "<td>" . $duration . "</td>";
        echo "<td>" . $summary . "</td>";
        echo "</tr>";
    }

} catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "<br/>";
    error_log("Cannot connect to DB\n", 0);
    die();
}

?>


        <?php include 'footer.php'; ?>


    </body>
</html>