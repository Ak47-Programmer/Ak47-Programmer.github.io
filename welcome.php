<?php  


session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {

	header('location:index.php');
	exit();
}
else
{
	session_destroy();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>my </title>
</head>
<body>

	<h1 style="font-weight: bold;text-align: center;">Ka haal ba    <?php echo $_SESSION['username']?></h1>
	<a href="Logout.php">Logout</a> 

</body>
</html>