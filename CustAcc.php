<!doctype html>
<html>
<head>
<link href="Css/Menu.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
session_start();




?>
<table width="100%" height="100%" border="1" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td  height="175" colspan="4"
      >
      <img height="175px" width="100%" src="pics/image_2.jpg"/></td>
    </tr>
    <tr>
      <td height="60" colspan="4">
      
      <?php include 'navigbar.php';?>
      </td>
    </tr>
    <tr>
      <td width="12%">&nbsp;</td>
      <td width="34%">&nbsp;</td>
      <td width="24%">&nbsp;</td>
      <td width="30%">&nbsp;</td>
    </tr>
    <tr>
      <td rowspan="2">&nbsp;</td>
      <td colspan="2" rowspan="2"><?php

if(!isset($_SESSION['customer']))
{
header('Location:login.php');
}else
{
$user=$_SESSION['uname'];
$id=$_SESSION['custid'];
echo $user;
echo $id;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture_mgnt_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

}

$sql="select * from customer where uname='$user'";


$result =mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0) {
	$row=mysqli_fetch_assoc($result);

$un=$row['uname'];
$fn=$row['Cust_fname'];
$ln=$row['Cust_lname'];
$ca=$row['Cust_adrs'];
$cp=$row['Cust_phno'];
$em=$row['Cust_email'];
?><br><?php echo $fn;
?><br><?php echo $ln;
?><br><?php echo $ca;
?><br><?php echo $cp;
?><br><?php echo $em;
	
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</body>
</html>
