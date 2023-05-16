

<!DOCTYPE html>

<html>
  


  <body>

  <?php include 'header.php'; ?>
 



    



    <div class="container push-down-top-lg">

     <div class="hban">

<H1>Welcome to your IT suport system</H1>



        <form action="admin-confirm.php" method="GET" class="mt-4">






            <div class="mb-3">
                <label for="Heading" class="form-label">Heading</label>
                <input type="text" name="hing" id="hing" class="form-control">
            </div>
           
            <div class="mb-3">
                <label for="TripDate" class="form-label">Trip Date</label>
                <input type="text" name="trip" id="trip" class="form-control">
            </div>



            
            <div class="mb-3">
                <label for="Duration" class="form-label">Duration</label>
                <input type="number" name="duration" id="duration" class="form-control">
            </div>



  
            <div class="mb-3">
                <label for="summary" class="form-label"> Summary </label>
                <input type="text" name="summary" id="summary" class="form-control">
            </div>






            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>


        <!--php code-->
       
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
                $stmt->bindColumn('Heading', $hing);
                $stmt->bindColumn('TripDate', $trip);
                $stmt->bindColumn('Duration', $duration);
                $stmt->bindColumn('Summary', $summary);
                /*while ($row = $stmt->fetch(PDO::FETCH_BOUND)) {
                    echo "<tr>";
                    echo "<td>" . $hing "</td>";
                    echo "<td>" . $email . "</td>";
                    echo "<td>" . $description . "</td>";
                    echo "<td>" . $github_link . "</td>";
                    echo "</tr>";
                }*/

            } catch (PDOException $e) {
                echo "Error : " . $e->getMessage() . "<br/>";
                error_log("Cannot connect to DB\n", 0);
                die();
            }

        ?>
        

</div>




 </div>




   
</div>


<?php include 'footer.php'; ?>




  </body>
</html>
