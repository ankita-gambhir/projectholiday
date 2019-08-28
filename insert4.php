<html>
<head>
<title>Displaying in an HTML table</title>
</head>
<body background="project_img\myholidays.jpg">
<?php
include('db_login.php');
$con = mysqli_connect($db_host, $db_username, $db_password,$db_database);
if (!$con)
die("Could not connect to the database: <br />". mysqli_connect_error( ));
$name = $_POST["name"];
$age = $_POST["age"];
$address = $_POST["address"];
$email = $_POST["email"];
$telephone = $_POST["telephone"];
$berth = $_POST["berth"];
$from1 = $_POST["from"];
$to1 = $_POST["to"];
$td = $_POST["tdate"];

$query = "Insert into flight values ('$name','$age','$address','$email','$telephone','$berth','$from1','$to1','$td')";
$result = mysqli_query($con, $query);
if (!$result)
die ("Could not insert the database. <br />");
echo "Record Inserted <BR> <BR>";
mysqli_close($con);
?>
<a href="http://localhost/holiday/myproject1.php">GO TO HOME</a> 
</boby>
</html>


