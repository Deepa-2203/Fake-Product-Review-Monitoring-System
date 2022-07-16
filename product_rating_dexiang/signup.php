
<?php
$con = mysqli_connect("localhost","root","Deepa@1223");
if (!$con)
  {
  die('Could not connect:' . mysqli_error());
  }

mysql_select_db($con,"productrate");
$ru=0;$re=0;
$username = mysqli_real_escape_string($_POST['username']);
$psw = mysqli_real_escape_string($_POST['psw']);
$dob = mysqli_real_escape_string($_POST['dob']);
$email = mysqli_real_escape_string($_POST['email']);
 // else not, insert to the table
$user = mysqli_query("SELECT * FROM `users` WHERE `uname` = '$username' ");
while($row1 = mysqli_fetch_array($user)){$ru+=1;}
$emailva = mysqli_query("SELECT * FROM `users` WHERE `email` = '$email' ");
while($row2 = mysqli_fetch_array($emailva)){$re+=1;}
$query = mysqli_query("INSERT INTO `users` (`uname` ,`psword` ,`email`,`datebirth`)
VALUES ('$username', '$psw', '$email', '$dob')");

if($ru!=0&&$re!=0){echo "3";}
else if($ru!=0){echo "2";}
else if($re!=0){echo "1";}
else{
  echo "0"; #0 is succeed
}
#echo "<script language='javascript'>"; 
 # echo " location='index.html';"; 
 # echo "</script>"; 
?>