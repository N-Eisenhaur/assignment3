<!DOCTYPE html>

<html>
  <head>
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> <!--remote CDN bootstrap-->





  </head>


  <body>

  <?php include 'header.php'; ?>
 



    



    <div class="container push-down-top-lg">

     <div class="hban">

<H1>Welcome to your IT suport system</H1>


<?php
            $fname = htmlspecialchars($_POST["fname"] ?? "", ENT_QUOTES);
            $lname = htmlspecialchars($_POST["lname"] ?? "", ENT_QUOTES);
            $role = htmlspecialchars($_POST["role"] ?? "", ENT_QUOTES);
           

            echo "<div class=\"mb-3\">First Name: $fname<br>
            <br>
            Last Name: $lname<br> <br>
            Role: $role<br><br>
       
            ";



            //session start

            
            session_start();
            
          /*  if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                header("location: dashboard.php");
                exit;
            }*/
            
            //$fname = "";
            //$lname = "";
            
            if (isset($_POST['First Name']) && isset($_POST['Last Name'])) {
                if (!empty($_POST['First Name']) && !empty($_POST['Last Name'])) {
                    $fname = $_POST['First Name'];
                    $lname = $_POST['Last Name'];
                }
            }
            


//validaition

            if (isset($_POST["submit"]) && $_POST["submit"] === "Submit") {

                $formComplete = true;
                $errorMessages = [];
    
                if (trim($fname) === "") {
                    $formComplete = false;
                    array_push($errorMessages, "First Name is missing");
              /*  } else if (filter_var($fname, FILTER_VALIDATE_EMAIL) === false) {//change filter
                    $formComplete = false;
                    array_push($errorMessages, "First Name incorrectly filled");*/
                }
                if (trim($lname) === "") {
                    $formComplete = false;
                    array_push($errorMessages, "Last Name missing");
                }
                if (!in_array($role, ["Admin", "Manager" , "CEO"])) {
                    $formComplete = false;
                    array_push($errorMessages, "Role missing");
                }
              
               
                    
                }
            
          

                if ($formComplete) {
                    echo "<div class=\"mb-3\">First Name: $fname<br>Last Name: $lname
                    <br>
                    <br>Role: $role<br> </div>"
                   ;
                } else {
                    echo "<div class=\"mt-4 mb-3 text-danger\"><p class=\"fw-bold\">Validation errors:</p><ul>";
                    foreach ($errorMessages as $errorMessage) {
                        echo "<li>$errorMessage</li>";
                    }
                    echo "</ul></div>";
                }
            



        ?>
        <form method="post" action="" class="mt-4">
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
                    <option value="">-- Please choose --</option>
                    <option value="1">Admin</option>
                    <option value="2">Manager</option>
                    <option value="3">CEO</option>
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
