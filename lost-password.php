




<!DOCTYPE html>

<html>
  

  <body>

  <?php include 'header.php'; ?>
 



    



    <div class="container push-down-top-lg">

     <div class="hban">

<H1>Welcome to the Lost Password </H1>



        <form method ="GET" action="send-mail.php" class="mt-4">


        <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input type="pass" name="pass" id="pass"class="form-control">
                <input type="hidden" name="mode" value="lost-password">
            </div>
       



           
           
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>




</div>




 </div>




   
</div>


<?php include 'footer.php'; ?>




  </body>
</html>
