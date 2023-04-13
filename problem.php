<?php


session_start();

$_SESSION["fname"] = $_GET["fname"];




$role_received = $_GET["Role"];



?>

<html>

<body>

<?php include 'header.php'; ?>


<H1> Hello  <?=$role_received?> </H1>

<h2> Here are your options:</h2>

<?php

if ($role_received == "Admin") {
echo "<a href=\"new-account.php\"> New Account </a>";
echo "<a href=\"Isnt-working.php\"> Page Not Working </a>";

}

elseif ($role_received == "Manager") {

  echo "<a href=\"#\"> Lost Password </a>";
  echo "<a href=\"Isnt-working.php\"> Page Not Working </a>";

}

elseif($role_received == "CEO") {

  echo "<a href=\"need-help.php\">Phone Number </a>";
  
}


?>

<?php include 'footer.php'; ?>


</body>

</html>