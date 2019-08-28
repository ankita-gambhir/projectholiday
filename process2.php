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
$username = $_POST["username"];
$password = $_POST["password"];
$error = "";

if ($username=='admin' and $password=='admin') 
header('Location:myproject.php');
else 
echo "Error: Username or password is invalid. <br />";

?>

</body>
</html>
