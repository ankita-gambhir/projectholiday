<html>
<head>
<title>Displaying in an HTML table</title>
</head>
<body background="project_img/myholidays.jpg">
<?php
session_start();

include('db_login.php');
$con = mysqli_connect($db_host, $db_username, $db_password,$db_database);
if (!$con)
die("Could not connect to the database: <br />". mysqli_connect_error( ));

$name=$_POST["name"];
$email=$_POST["email"];
$phone =$_POST["phone"];
$street=$_POST["street"];
$city=$_POST["city"];
$country=$_POST["country"];
$arrive=$_POST["arrive"];
$depart=$_POST["depart"];
$people=$_POST["people"];
$room=$_POST["room"];
$bedding=$_POST["bedding"];
$hotel=$_POST["hotel"];
$comments=$_POST["comments"];

$name = $_SESSION['uname'];
$hotel = $_SESSION['hotel'];


$query = "Insert into hotel values ('$name','$email','$phone','$street','$city', '$country','$arrive','$depart','$people','$room','$bedding','$hotel','$comments')";
$result = mysqli_query($con, $query);

if (!$result)
die ("Could not insert the database. <br />");

$query = "update capacity set quantity = quantity -1 where hotel='$hotel'"; 
$result = mysqli_query($con, $query);
if (!$result)
die ("Could not insert the database. <br />");

echo "Record Inserted <BR> <BR>";
mysqli_close($con);
?>
<a href="http://localhost/holiday/myproject1.php">GO TO HOME</a> 
</boby>
</html>


