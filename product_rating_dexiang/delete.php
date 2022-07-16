<?php 
$mID=$_GET["mID"];
?>
<html>
<body>
<?php

$con = mysqli_connect("localhost","root","Deepa@1223");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db($con,"productrate");

$query = mysqli_query("DELETE FROM `products` WHERE `productID` = $mID");
echo 'You have deleted this product';
echo '<br><a href="Admin.html">back</a>';

mysqli_close($con);
?>
</body>
</html>