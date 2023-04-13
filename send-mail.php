<?php




$email1_received = $_GET["email1"];



?>

<html>

<body>

<?php include 'header.php'; ?>


<H1> Hello   </H1>

<h2> 


<?php

if ($email1_received == "email1") {
echo "You have made a new account";


}

/*elseif ($role_received == "Manager") {

  echo "<a href=\"#\"> Lost Password </a>";
  echo "<a href=\"Isnt-working.php\"> Page Not Working </a>";

}*/




?>



</h2>



<?php include 'footer.php'; ?>


</body>

</html>