<!DOCTYPE html>
<html>
<head>
	<title>Notice Board- add notice</title>
	<h1 align="center">Notice board</h1>
	<h3 align="center">Add a notice</h3>
	<style >

	.display{
			max-width: 500px;
			margin:  2rem auto;
			border: 2px solid ;
			padding: 2rem;
			border-radius: 2rem;
			background-color: #f9b0c3;
		}
	.display input[type="submit"] { 
  			border: none;
  			outline: none;
  			height: 40px;
  			color: #000;
  			font-size: 18px;
  			border-radius: 20px;
  		}
  	.display input[type="submit"]:hover
  		{
  			cursor: pointer;
  			background: #e3abce;
  			color: #000;
  		}

  	.display input[type="reset"]{
  		border: none;
  			outline: none;
  			height: 40px;
  			color: #000;
  			font-size: 18px;
  			border-radius: 20px;
  			font-family: sans-serif;
  		}

  	.display input[type="reset"]:hover
  	{
  		cursor: pointer;
  		background: #e3abce;
  		color: #000;
  		
  	}
  	.display input[type="text"], input[type="text"], textarea [type="description"]{
  			border: none;
  			border-bottom: 1px solid #fff;
  			background: transparent;
  			outline: none;
  			height: 40px;
  			color: #fff;
  			font-size: 16px;
  		}

	</style>
	<?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
</head>
<body>
	<style >
		body{
			background-image: url('bg1.jpg');
  			height: 518px;
  			background-position: center;
  			
  			background-size: cover;
  			background-repeat: no-repeat;
		}
	</style>
	<div class="display">
	<form action="" method="post">
		Subject:      <input type="text" name="subject" placeholder="subject" required><br/><br>
		Link:         <input type="text" name="link" placeholder="link"><br/><br>
		Description:  <input type="text" name="description" placeholder="description here"><br/><br>
		<input type="submit" name="submit"  value="Add" ><br/><br>
		

		<?php
		if(isset($_POST['submit'])){
			header("Location: add_notice.php");
		}


		
	?>
	
	

</body>
</html>