<html>
<head>
    <link rel="stylesheet" type="text/css" href="oes.css"/>

<script language = "JavaScript" SRC = "source.js"> </script>
<title> Sample Form </title>
</head>
<script language = "JavaScript">
function check_valid(form) 
{
var error = "";
error += verify_username(form.username.value);
error += verify_password(form.password.value);
if (error != "") 
{
alert(error);
return false;
}
return true;
}
</script>
<body bgcolor="#FFFFFF">
<div id="container">
            
                <div class="header">
                <img style="margin:10px 2px 2px 10px;float:left;" height="80" width="200" src="images/logo1.gif" alt="OES"/><h3 class="headtext"> &nbsp;Online Holiday Homes Booking System </h3><h4 style="color:#ffffff;text-align:center;margin:0 0 5px 5px;"><i>...because Holidays Matters</i></h4>
            </div>
<center>

<form action = "process.php" method = "post"
onSubmit = "return check_valid(this)" name = "form">
<br><br><br>
<table border = "0" width = "50%" cellspacing = "0" cellpadding = "0">
<tr>
<td width = "30%" ALIGN = "right"> Username</td>
<td width = "70%">: <input type = "text" name = "username" /> </td> </tr>
<tr></tr>
<tr></tr>
<tr>
<td align="right">Password</TD> <td>: <input type = "password" NAME = "password" /></td> </tr>
<tr></tr>
<tr><td> </td><td> </td></tr>
<tr>
<td>&nbsp;</td> <td><input type = "SUBMIT" value = "Submit" /></td>
</tr>
</table>
<br><br>
<a href="sample.php">New Registration
&nbsp&nbsp&nbsp&nbsp
<a href="admin.php">Admin Login

</form>
</center>
</body>
</html>
