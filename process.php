<html>
<head>
<title>Sample Form</title>
  <link rel="stylesheet" type="text/css" href="oes.css"/>

</head>
<body>
<div id="container">
            
                <div class="header">
                <img style="margin:10px 2px 2px 10px;float:left;" height="80" width="200" src="images/logo1.gif" alt="OES"/><h3 class="headtext"> &nbsp;Online Holiday Homes Booking System </h3><h4 style="color:#ffffff;text-align:center;margin:0 0 5px 5px;"><i>...because Holidays Matters</i></h4>
            </div>

<?php
// Check for form post submit
session_start();
include('db_login.php');
$con = mysqli_connect($db_host, $db_username, $db_password, $db_database);
if (!$con)
die ("Could not connect to the database: <br />". mysqli_connect_error( ));
$username = $_POST["username"];
$password = $_POST["password"];
$error = "";

// Query the posts with user information
$query = "SELECT * FROM users WHERE uname='$username' and password = '$password'";
$result = mysqli_query($con, $query );
if (!$result)
die ("Could not query the database. <br />");

//$row=mysqli_fetch_assoc($result);
$c = mysqli_num_rows($result);

if ($c > 0) 
{
$_SESSION['uname']=$username;
header('Location:myproject1.php');
}
else 
echo "Error: Username or password is invalid. <br />";

?>

</body>
</html>
