<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">

      #header{
      height: 16%;
      width: 100%;
      top: 2%;
      background-color: #ceb6d9 ;
      position: fixed;
      color: white;
    }
  	#getin{
  		margin: 0;
  		padding: 0;
  		top: 0px;
  		background: url(bg2.jpg);
  		background-size: cover;
  		background-position: center;
  		font-family: sans-serif;
  		height:600px;
  		width: 1300x;
  	}
  	.button{
			 border: 0 !important;
 			 color: #008CBA ;
  			 padding: 10px, 15px;
  			 text-align: center;
   			 display: inline-block;
  			 font-size: 15px;
  			 margin: 4px 2px;
  			 border-radius: 25px;
  			 outline-style: 0 !important;
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
  }
  	
</head>
<body>
	<div id="getin">
		<div class="login">
	<center>
	<h3><i>Student Teacher Discussion From</i></h3><br>
	<form action="" method="POST">
		<input type="submit" name="teacher_login" value="Teacher Login" required><br><br><br>
		<input type="submit" name="student_login" value="Student Login" required>
	</form>
	<?php
		if(isset($_POST['teacher_login'])){
			header("Location: teacher_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
	</center>
	</div>
</div>
</body>

</html>