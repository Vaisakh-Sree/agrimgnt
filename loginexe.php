<?php
session_start();
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

if(empty($_POST["uname"])||empty($_POST["password"]))
{
die("please enter UserName and Password");
}
else
{

$a=$_POST["uname"];
$b=$_POST["password"];
}

$sql="select * from customer where uname='$a' and password='$b'";


$result =mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0) {
	$row=mysqli_fetch_assoc($result);
	
    
 
echo "LOGIN SUCCESS";
$id=$row['Cust_id'];
$un=$row['uname'];
$fn=$row['Cust_name'];
echo $id;

$_SESSION['customer']=1;
$_SESSION['uname']=$un;
$_SESSION['custid']=$id;
$_SESSION['fname']=$fn;


header('Location:CustAcc.php');
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>