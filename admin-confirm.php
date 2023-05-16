
<?php include 'header.php'; ?>


<?php
session_start();


$_SESSION["Heading"] = $_GET["hing"];
$_SESSION["TripDate"]= $trip;
$_SESSION["Duration"]= $duration;
$_SESSION["Summary"]= $summary;

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
        $stmt->execute([hing, $trip, $duration, $summary]);
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



        <label class="title">Confirm Form</label>
        <br>
        <label class="subtitle">Please confirm the following details, and click "Send" once all information is confirmed to be correct.</label>
        <br>
        <div class="confirmDetail">
            <label class="detailHeader">Heading</label>
            <label class="detailBody"><?=hing?></label>
            <label class="detailHeader">Trip Date</label>
            <label class="detailBody"><?=$trip?></label>
            <label class="detailHeader">Duration</label>
            <label class="detailBody"><?=$duration?></label>
            <label class="detailHeader">Summary</label>
            <label class="detailBody"><?=$summary?></label>
        </div>
        <br/>
        <form action="dbsave.php">
            <input type="submit">
            <input type="button" value="Back" onclick="history.back()">
        </form>


        <?php include 'footer.php'; ?>


    </body>
</html>