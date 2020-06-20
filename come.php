<?php

session_start();

# mysql connection 
$con = mysqli_connect('localhost','root');

if ($con)
 {
	echo "Connection Successfully.....";
}
else
{
	echo "Error in Connection.....";
}

# select DB now 

mysqli_select_db($con,'finder');
# access user's Data 
$name = $_POST['user'];
$psw = $_POST['pass'];
$gend = $_POST['gender'];
$numbe = $_POST['num'];
$crse = $_POST['course'];
$incm = $_POST['income'];
$dte = $_POST['date'];

# now duplication checker 

$dupli = "select *from tinder where username = '$name' && password = '$psw'";

# now connect duplicacy query to the DB 

$count= mysqli_query($con,$dupli);

# now count row for checking duplicacy 

$number = mysqli_num_rows($count);

if ($number==1) {
	echo "Already Exists.....";
}
else
{
	$insertion = "insert into tinder(username,password,gender,Mobile,course,income,date) values('$name','$psw','$gend','$numbe','$crse','$incm','$dte')";
	mysqli_query($con,$insertion);
}
























  ?>