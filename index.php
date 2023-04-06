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




   <!-- <script
      src="https://code.jquery.com/jquery-2.1.1.min.js"
      type="text/javascript"
    ></script>
    <script>
      $(document).ready(function () {
        $("#menu-expand-collapse").click(function () {
          $("#main-navigation").toggle();
        });
      });
    </script> -->


  </head>


  <body>


 


<nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href=""> <img src="imgs/paddle-white.png" alt="..." height="36"></a>


        <!--This is used for your website branding. You can also include a logo image file here.-->

        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <!--
            navbar-toggler — Denotes the toggle button for the collapsed menu. The piece data-toggle="collapse" defines that this will turn to a hamburger menu, not to drop-down, which is the other option. It’s important that you define a data-target with a CSS id (defined by the #) and wrap a div with the same name around the actual navbar element.-->

            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav"> <!--
                navbar-nav — The class for the <ul> list element that holds the menu items. The latter are denoted with nav-item and nav-link.-->
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Book Trip</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Admin Login</a>
                </li>
            </ul>
        </div>
    </nav>


    

		<!--<div id="menu-expand-collapse">
			<img src="imgs/hamburger.png" width="25px" /> 
		  </div>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav"> 
                navbar-nav — The class for the <ul> list element that holds the menu items. The latter are denoted with nav-item and nav-link.
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Book Trip</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Admin Login</a>
                </li>
            </ul>
        </div>
    </nav>
    -->



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

 <div class="footer">
  Footer

    </div>
  </body>
</html>
