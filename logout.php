<?php

session_start();
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}




?>

<html>

<body>

<?php include 'header.php'; ?>


<H1> Hello   </H1>

<h2> 

 Please Confirm Logout

</h2>



<form method="post">
		<input type="submit" name="logout" value="Logout">
	</form>



<?php include 'footer.php'; ?>


</body>

</html>