<!DOCTYPE html>
<html>
<head>
	<title>Teacher Login</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

  	<style type="text/css">
  		#getin{
  		margin: 0;
  		padding: 0;
  		top: 0px;
  		background: url(bg2.jpg);
  		background-size: cover;
  		background-position: center;
  		font-family: sans-serif;
  		height:657px;
  		width: 1200x;
  	}
  		.login{
  			width: 320px;
  			height: 420px;
  			background: #000;
  			color: #fff;
  			top: 50%;
  			left: 50%;
  			position: absolute;
  			transform: translate(-50%,-50%);
  			box-sizing: border-box;
  			padding: 70px ;
  		}
  		.person{
  			width: 100px;
  			height: 100px;
  			border-radius: 50%;
  			position: absolute;
  			top: -50px;
  			left: calc(50% - 50px);
  		}
  		.login input{
  			width: 100%;
  			margin-bottom: 20 px;
  		}
  		.login input[type="text"], input[type="password"]{
  			border: none;
  			border-bottom: 1px solid #fff;
  			background: transparent;
  			outline: none;
  			height: 40px;
  			color: #fff;
  			font-size: 16px;
  		}
  		.login input[type="submit"]{
  			border: none;
  			outline: none;
  			height: 40px;
  			color: #000;
  			font-size: 18px;
  			border-radius: 20px;
  		}
  		.login input[type="submit"]:hover
  		{
  			cursor: pointer;
  			background: #ffc107;
  			color: #000;
  		}


  	</style>
</head>
<body>
	<div id="getin"> <br>
	<div class="login">
		<img src="icon.png" class="person">
	
	
	<center><br><br>
		<h5 style="float:left; color:#ffffff; ">Teacher LogIn Page</h5><br>
		
		<form action="" method="post">
			Email ID: <input type="text" name="email" placeholder="Enter your Email id:" required><br><br>
			Password: <input type="password" name="password" placeholder="password" required><br><br>
			<input type="submit" name="LogIn" value="LogIn">
		</form><br>
		
		<?php
			session_start();
			if(isset($_POST['LogIn'])){
				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"stdform");
				$query = "select * from login where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) {
					if($row['email'] == $_POST['email']){
						if($row['password'] == $_POST['password']){
							$_SESSION['name'] =  $row['name'];
							$_SESSION['email'] =  $row['email'];
							header("Location: teacher_dashhhhboard.php");
						}
						else{
							?>
							<span>Wrong Password !!</span>
							<?php
						}
					}
				}
				
			}
		?>
	</center>
	</div>
	</div>
</body>
</html>