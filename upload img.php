<html>
<body>
<h1>How to manage the images on webapplication </h1>
<hr/>
<?php

if(isset($_REQUEST["submit"]))
{
	$pn=$_REQUEST["product name"];
	$pr=$_REQUEST["price"];
        $itm=$_REQUEST["item"];
	$url ="img".$_FILES["fileToUpload"]["name"];
	
	$target_file = "C:\xampp\htdocs\test\img".$_FILES["fileToUpload"]["name"];
	
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);

	$con =mysqli_connect("localhost","root","","sales");
	mysqli_query($con,"insert into `sale` (`product name`,`price`,`item`) values ('$pn','$pr','$itm)");

}
?>
<fieldset>
<legend>upload images</legend>
<form action="upload img.php" method="post" enctype="multipart/form-data">
    product name : <input type="text" name="product name" /><br/>
	price : <input type="text" name="price"/><br/>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit"/>
	 <input type="submit" value="Display all images" name="disp"/>
</form>

</fieldset>
<?php
if(isset($_REQUEST["disp"]))
{
	$con =mysqli_connect("localhost","root","","sales");
	$res= mysqli_query($con,"select * from `sale`");
	echo"<table>";
	while($val=mysqli_fetch_array($res))
	{
		echo"<tr><td><img src='$val[3]' height='120px' width='120px'alt=''/>
		<br/>$val[1]<br/>$val[2]
		</td></tr>";
	}
	
echo"</table>";
	
}
?>
</body>

</html>
