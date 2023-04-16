

<html>

<body>

<?php include 'header.php'; ?>


<H1> Hello   </H1>

<h2> 


<?php


  $mode = $_GET["mode"];

  if ($mode == "new-account") {
      $email_received = $_GET["email1"];
      $_SESSION["email1"] = $_GET["email1"];

      echo "Account creation successful.";


  } elseif ($mode == "lost-password") {
      $pass_received = $_GET["pass"];
      $_SESSION["pass"] = $_GET["pass"];

      echo "New password sent.";
  }





?>

<a href ="logout.php">Logout </a>


</h2>



<?php include 'footer.php'; ?>


</body>

</html>