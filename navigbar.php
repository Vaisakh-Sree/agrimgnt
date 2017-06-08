<!doctype html>
<html>
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
<body>
 <div id="Menu">
<ul>
  <li><a class="active" href="homeindex.php">&nbsp;&nbsp;&nbsp;&nbsp;Home</a></li>
  <li><a href="crpnav.php">&nbsp;&nbsp;&nbsp;Crops&nbsp;&nbsp;</a></li><li><a href="crpnav.php">Products</a></li>
    <li><a href="ContactUs.php">&nbsp;&nbsp;&nbsp;News</a></li>

  <li><a href="ContactUs.php">&nbsp;&nbsp;&nbsp;Contact</a></li>
  <ul style="float:right;list-style-type:none;">
    <li><a href="AboutUs.php">About</a></li>
    <li><a href="Cust_regisform.php"><?php
    if(!isset($_SESSION['customer']))
{
echo "SignUp/Login";
}
else
echo "My Account";?>
</a></li>
  </ul>
</ul>
</div>
</body>
</html>
