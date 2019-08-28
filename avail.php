<?php
session_start();
$hotel = $_SESSION['hotel'];
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="oes.css"/>

<meta http-equiv="Content-Type" content = "text/html; charset = iso-8859-1">
<title>Checking availability</title>
</head>
<body text = "blue" background="project_img/myholidays.jpg">
<basefont size="5">
<div id="container">
            
                <div class="header">
                <img style="margin:10px 2px 2px 10px;float:left;" height="80" width="200" src="images/logo1.gif" alt="OES"/><h3 class="headtext"> &nbsp;Online Holiday Homes Booking System </h3><h4 style="color:#ffffff;text-align:center;margin:0 0 5px 5px;"><i>...because Holidays Matters</i></h4>
            </div>

<pre>













</pre>
<center>
<h1> <font color="red"> Hotel <?php echo $hotel ?></font> </h1>
<?php
//Include our login information
include('db_login.php');
// Connect
$con = mysqli_connect($db_host, 
$db_username, $db_password,$db_database);

if (!$con){
die("Could not connect to the database: <br />". mysqli_connect_error( ));
}
// Assign the query
$query = "SELECT * FROM capacity where HOTEL ='$hotel'";
// Execute the query
$result = mysqli_query($con, $query);
if (!$result)
die ("Could not query the database. <br />");
// Fetch and display the results
while ($row = mysqli_fetch_assoc($result))
{
$en = $row["quantity"];
}
// Close the connection
mysqli_close($con);
if ($en == 0)
echo "Room is not available";
else
echo "Room is available";

?>
</table>
<br><br>
<a href="http://localhost/holiday/holidays.php">Hotel Booking</a> 

<center>

</body>
</html>
