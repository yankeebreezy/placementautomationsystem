<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Placment Automation System</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="ereset.css" rel="stylesheet" type="text/css" />
<link href="estructure.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
        <style type="text/css">
<!--
.style2 {font-size: 12px}
.style3 {
	color: #000099;
	font-weight: bold;
	font-size: 18px;
}
table.center {
    margin-left:auto; 
    margin-right:auto;
  }
.style11 {
	color: #220000;
	font-size: 20px;
}
.style12 {font-family: Tahoma, Arial, Helvetica, sans-serif}
.style13 {font-size: 24px; color: #000066;}
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.style14 {color: #330000}
-->
        </style>
		<?php
		$dbcnx = @mysql_connect('localhost','root','anand');
		if (!$dbcnx) {
exit('<p>Unable to connect to the ' .
'database server at this time.</p>');
}
if (!@mysql_select_db('project')){
exit('<p>Unable to locate the joke ' .
'database at this time.</p>');
}
if(isset($_POST['activity']))
{
$activity=$_POST['activity'];
$sql = "INSERT INTO activity SET activity='$activity'";
if (@mysql_query($sql)) {
echo "<script>alert('Your record has been added.')</script>";
} else {
echo "<script>alert('Error adding submitted record: Check Fields.')</script>";
}
}
?>


</head>
<body>
<div id="bg_top">
<div id="main">
<!-- header begins -->
<div id="logo"><a href="home.html">placement automation system </a></div>
<div id="buttons">
		<ul>
			<li><a href="page.html" target="_blank">Students</a></li>
			<li><a href="activity.html" title="">Activity</a></li>
			<li><a href="recruiters.html" title="">Recruiters</a></li>
			<li><a href="placementdetailshome.html" title="">Placement Details </a></li>
			<li><a href="mailto:placementcellpsna@gmail.com">Mail</a></li>
		</ul>
</div>
<div id="header">	
	<div id="wrapper">
        <div id="slider-wrapper">        
            <div id="slider" class="nivoSlider">
                <img src="images/image1.jpg" alt="" width="963" height="257" />
                <img src="images/image2.jpg" alt="" width="963" height="257"/>
                <img src="images/image3.jpg" alt="" width="963" height="257" />
				<img src="images/image4.jpg" alt="" width="963" height="257" />
				<img src="images/image5.jpg" alt="" width="963" height="257" />            </div>        
        </div>

<script type="text/javascript" src="lib/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="lib/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</div>	
</div>
<!-- header ends -->
<!-- content begins -->

  <div class="style3 style12" id="content">
    <p>&nbsp;</p>
    <p class="style13 style14">ACTIVITY</p>
    <p>&nbsp;</p>
    <p><span class="style11">Activities Entry</span> <br />
    </p>
   <form action="" method="post">
<table border="0" class="center">
<tr><td bgcolor="#EEEEEE"><textarea name="activity" rows="5" cols="80">
</textarea>
  </label>
    <br /></td></tr>

<tr> 
       <td height="32" colspan="3"><footer>
	  <input type="submit" class="btnLogin" value="Submit" tabindex="4">
	</footer>&nbsp;</td>
       </tr>
</table>
	</form>
  </div>
  <div id="footer">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&copy;Copyright  2012. Developed by TEAM CAM </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p class="style2">&nbsp;</p>
</div>
<span class="style2">
<!-- footer ends -->
</span></div>
</div>
</body>
</html>