<!doctype html>
<html>
<head>
<link href="Css/Menu.css" rel="stylesheet" type="text/css"/>
<link href="Css/formtype.css" rel="stylesheet" type="text/css"/>
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
if(isset($_SESSION['customer']))
{
header('Location:CustAcc.php');
}



?>
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td  height="175" colspan="4"
      >
      <img height="175px" width="100%" src="pics/image_2.jpg"/></td>
    </tr>
    <tr>
      <td height="60" colspan="4">
      
      <?php 
	  //include 'navigbar.php';?>
      </td>
    </tr>
    <tr>
      <td width="12%">&nbsp;</td>
      <td width="34%">&nbsp;</td>
      <td width="24%">&nbsp;</td>
      <td width="30%">&nbsp;</td>
    </tr>
    <tr>
      <td rowspan="2"><?php //include 'Sidebar.php';?></td>
      <td height="276"><form action="loginexe.php" method="post" name="login" id="login">
  <table  
" width="302" border="0">
    <tbody>
      <tr>
        <td height="234" colspan="2"><center>Already a User</center> <br>LOGIN
          <input type="text" name="uname" id="uname">
          PASSWORD
          <input type="password" name="password" id="password">          <center>
            <input  name="submit" type="submit" formnovalidate="formnovalidate" id="submit" formaction="loginexe.php" value="LOGIN"></center></td>
      </tr>
      </tbody>
  </table>
</form></td>
      <td rowspan="2"><center>New USER</center><form id="form2" action="phpexe/Cust_regisformexe.php" name="form1" method="post">
<table align="center" width="275" border="0">
  <tbody>
    <tr>
      <td width="69">Full Name</td>
      <td width="190"><input type="text" name="fname" id="fname"></td>
    </tr>
    <tr>
      <td><p>Last Name</p></td>
      <td><input type="text" name="lname" id="lname"></td>
    </tr>
    <tr>
      <td>UserName</td>
      <td><input type="text" name="uname" id="uname"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="password" id="password"></td>
    </tr>
    <tr>
      <td>Full Address</td>
      <td><textarea name="adrs" id="adrs"></textarea></td>
    </tr>
    <tr>
      <td>DateOfBith</td>
      <td><input type="date" name="date" id="date"></td>
    </tr>
    <tr>
      <td>Phone Number</td>
      <td><input type="text" name="phno" id="phno"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input name="email" type="email" id="email" autocomplete="off"></td>
    </tr>
    <tr>
      <td colspan="2"><center><input name="submit" type="submit" id="submit" formaction="phpexe/Cust_regisformexe.php" value="SUBMIT" align="middle"></center></td>
      </tr>
  </tbody>
</table>
</form>
</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td></td>
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
