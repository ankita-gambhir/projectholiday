<html>
<head>
<link rel="stylesheet" type="text/css" href="oes.css"/>

<meta http-equiv="Content-Type" content = "text/html; charset = iso-8859-1">
<title>Displaying in an HTML table</title>
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
<h1> <font color="red"> Bus Reservation Details</font> </h1>
<table border = "1" width ="50%" >

<tr>
<th>Name</th>
<th>age</th>
<th>Address</th>
<th>Email</th>
<th>Phone</th>
<th>Berth</th>
<th>From</th>
<th>To</th>
<th>Travel Date</th>

</tr>
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
$query = "SELECT * FROM bus";
// Execute the query
$result = mysqli_query($con, $query);
if (!$result)
die ("Could not query the database. <br />");

$c = mysqli_num_rows($result);

if ($c == 0) 
echo "No booking in the bus <br />";


// Fetch and display the results
while ($row = mysqli_fetch_assoc($result))
{
$en = $row["name"];
$ag = $row["age"];
$ad = $row["address"];

$nm = $row["email"];
$ph = $row["telephone"];

$j = $row["berth"];
$s = $row["from1"];
$ar = $row["to1"];
$dp = $row["tdate"];

echo "<tr align='center'>";
echo "<td>$en</td>";
echo "<td>$ag</td>";

echo "<td>$ad</td>";
echo "<td>$nm</td>";

echo "<td>$ph</td>";

echo "<td>$j</td>";
echo "<td>$s</td>";

echo "<td>$ar</td>";
echo "<td>$dp</td>";


echo "</tr>";
}
// Close the connection
mysqli_close($con);
?>
</table>
<br><br>
<a href="http://localhost/holiday/myproject.php">GO TO HOME</a> 

<center>

</body>
</html>
