<?php
include("connect.php");
if(!$connection)
{
echo("server connection failed");
}

else{
if(isset($_POST['submit'])){ 
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$regular = $_POST['regular'];
$instrument = $_POST['instrument'];
$parent = $_POST['parent'];
$parmob = $_POST['parmob'];
$stumob = $_POST['stumob'];
$stuemail = $_POST['stuemail'];
$paremail = $_POST['paremail'];
$address = $_POST['address'];
$query = $_POST['query'];
$sql="INSERT INTO data(fname,lname,age,dob,regular,instrument,parent,parmob,stumob,stuemail,paremail,address,q) values ('$fname', '$lname', '$age', '$dob','$regular','$instrument','$parent','$parmob','$stumob','$stuemail','$paremail','$address','$query')";
if($connection->query($sql)===TRUE)
{
    echo "";
}
}
}
$values ="First Name :". $fname."\n\n Last Name :".$lname;
$values_2 = "";
      mail('saicharan14996@gmail.com', 'New Request Captured',$values,"New Request from SEOTechie", implode("\r\n", $headers));
?>


<html lang="en">
<head>
    <title>Thank you </title>
      <link rel="shortcut icon" type="image/png" href="assets\images\logo.png">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
</head>
<body>
	<header class="site-header" id="header">
		<h1 class="site-header__title" data-lead-id="site-header-title" style="font-size:40px;">THANK YOU!</h1>
	</header>

	<div class="main-content">
		<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
		<p class="main-content__body" data-lead-id="main-content-body" style="line-height:30px;">Thanks for reaching out to us! soon you will receive a call with the details of the course !</p>
	</div>

	<footer class="site-footer" id="footer">
		<p class="site-footer__fineprint" id="fineprint">Copyright ©2018 | All Rights Reserved</p>
	</footer>
</body>
</html>