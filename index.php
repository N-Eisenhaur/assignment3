


<!DOCTYPE html>

<html>
  


  <body>

  <?php include 'header.php'; ?>
 



    



    <div class="container push-down-top-lg">

     <div class="hban">

<H1>Welcome to your IT suport system</H1>



        <form method ="GET" action="problem.php" class="mt-4">



        <div class="mb-3">
                <label for="Title" class="form-label">Title</label>
                <select name="Title" id="Title" class="form-select">
                    <option value="1">Mr</option>
                    <option value="2">Ms</option>
                </select>
            </div>
           



            <div class="mb-3">
                <label for="First Name" class="form-label">First Name</label>
                <input type="text" name="fname" id="fname" class="form-control">
            </div>
           
            <div class="mb-3">
                <label for="Last Name" class="form-label">Last Name</label>
                <input type="text" name="lname" id="lname" class="form-control">
            </div>


            <div class="mb-3">
                <label for="Role" class="form-label">Role</label>
                <select name="Role" id="Role" class="form-select">
                    <option value="Admin">Admin</option>
                    <option value="Manager">Manager</option>
                    <option value="CEO">CEO</option>
                </select>
            </div>
           
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>



<a href ="#">Logout </a>

</div>




 </div>




   
</div>


<?php include 'footer.php'; ?>




  </body>
</html>
