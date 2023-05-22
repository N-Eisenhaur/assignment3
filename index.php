<?php
session_start();

$_SESSION["heading"] = "Heading";
$_SESSION["trip"] = "TripDate";
$_SESSION["duration"] = "Duration";
$_SESSION["summary"] = "summary";





?>

<!DOCTYPE html>

<html>
  


  <body>

  <?php include 'header.php'; ?>
 



    



    <div class="container push-down-top-lg">

     <div class="hban">

<H1>Please enter your information.</H1>



        <form action="admin-confirm.php" method="GET" class="mt-4">






            <div class="mb-3">
                <label for="Heading" class="form-label">Heading</label>
                <input type="text" name="heading" id="heading" class="form-control">
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
       
       
        

</div>




 </div>




   
</div>


<?php include 'footer.php'; ?>




  </body>
</html>
