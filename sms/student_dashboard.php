<!DOCTYPE html>
<html>
<head>
	<title>Student Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		#header{
			height: 17%;
			width: 100%;
			top: 2%;
			background-color: #ceb6d9 ;
			position: fixed;
			color: white;
		}
		#left_side{
			margin-left: 40px;
			background-color: #ceb6d9;
			height: 60%;
			width: 14%;
			top: 30%;
			position: fixed;
			border-radius: 25px;
			max-width: 500px;
			padding-bottom:80px;
			padding-top: 0px;
			border: 2px solid ;
			align-items: center;

		}
		#right_side{
			height: 77%;
			width: 70%;
			background-color: #e3abce;
			background-size: 300px;
			position: fixed;
			left: 20%;
			top: 20%;
			color: purple ;
			border: solid 1px black;
			border-radius: 25px;
			padding: 20px;
		}

		.button{
			 border: 0 !important;
 			 color: #008CBA ;
  			 padding: 10px, 15px;
  			 text-align: center;
   			 display: inline-block;
  			 font-size: 15px;
  			 margin: 4px 2px;
  			 border-radius: 35px;
  			 outline: none;
		}
		.display{
			max-width: 500px;
			margin:  2rem auto;
			border: 2px solid ;
			padding: 2rem;
			border-radius: 2rem;
			&:hover{
			background-color: #purple;
		}
		#td{
			border: solid 1 px #e3abce;
			padding-left: 2px;
			text-align: center;
			width: 300px; 
			border-collapse: collapse;
			text-align: left;

		}
		.tt{
			border-collapse: collapse;
			margin: 25px 0;
			font-size: 0.9em;
			min-width: 400px
		}
		
		.tt thead tr{
			text-align: left;

		}
	</style>
	<?php
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
	?>
</head>
<body>
	<style>
		body {
  			background-image: url('bg1.jpg');
  			height: 540px;
  			background-position: center;
  			width: 100px;
  			background-size: cover;
  			background-repeat: no-repeat;
			}
	</style>
	<div id="header"><br>
		<center><b >Student Teacher Discussion Form </b><br>Email:  <?php echo $_SESSION['email'];?> <br> 	Name:  <?php echo $_SESSION['name'];?>
		<button class="button button1" style="float:right" ><a href="logout.php">Logout</a></button>
		</center>
		
	</div>
	<!--<span id="top_span"><marquee>Note:- This portal is open till 31 March 2020...Plz edit your information, if wrong.</marquee></span>-->
	<div id="left_side">
		<br><br><br>
		<form action="" method="post">
			<center>
			<div >		
			<table>
				<tr>
					<td>
						<button class="button button1" style="float:right" ><input type="submit" name="show_detail" value="Edit Detail"><br></button><br><br>
					</td>
				</tr>
				<tr>
					<td>
						<button class="button button2" style="float:right" ><input type="submit" name="edit_detail" value="Show Detail"><br></button><br><br>
					</td>
				</tr>
				<tr>
					<td>
						<button class="button button2" style="float:right" ><input type="submit" name="timetable" value=" Timetable"><br></button><br><br>
					</td>
				</tr>
				<tr>
					<td>
						<button class="button button2" style="float:right" ><input type="submit" name="notice_board" value=" Notice Board"><br></button><br><br>
					</td>
				</tr>
			</table>
		</div>
		</center>
		</form>
	</div>
	<div id="right_side"><br><br>
		
			<?php
			if(isset($_POST['show_detail']))

			{
				$query = "select * from students where email = '$_SESSION[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
			?>
			<div class="display">	
			<center>
				<table>
					<tr>
						<td>
							<b>Roll No:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['roll_no']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['name']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Father's Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['father_name']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Class:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['class']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Mobile:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['mobile']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Email:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['email']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Password:</b>
						</td> 
						<td>
							<input type="password" value="<?php echo $row['password']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Remark:</b>
						</td> 
						<td>
							<textarea rows="1" cols="40" disabled><?php echo $row['remark']?></textarea>
						</td>
					</tr>
				</table>
			</center>
			</div>
				<?php
				}	
			}
			?>

			<?php
			if(isset($_POST['edit_detail']))
			{
				$query = "select * from students where email = '$_SESSION[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) 
				{
					?>
					<form action="edit_student.php" method="post">
						<div class="display">
						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" value="<?php echo $row['roll_no']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" value="<?php echo $row['name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Father's Name:</b>
							</td> 
							<td>
								<input type="text" name="father_name" value="<?php echo $row['father_name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Class:</b>
							</td> 
							<td>
								<input type="text" name="class" value="<?php echo $row['class']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" value="<?php echo $row['mobile']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" value="<?php echo $row['email']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" value="<?php echo $row['password']?>">
							</td>
						</tr>
						<!--<tr>
							<td>
								<b>Remark:</b>
							</td> 
							<td>
								<textarea rows="3" cols="40" name="remark"><?php echo $row['remark']?></textarea>
							</td>
						</tr><br>-->
						<tr>
							<td></td>
							<td>
								<button class="button button1" style="float:right" ><input type="submit" value="Save"></button>
							</td>
						</tr>
					</table>
					</div>
					</form>
					<?php
				}
			}
			?>


			
			<?php 
				if(isset($_POST['notice_board'])){
					
					$query = "select * from notice ";
					$query_run = mysqli_query($connection,$query);
					$row = mysqli_fetch_assoc($query_run);
					?>
					<form action="" method="post">
						<div class="display"> 
						<table>
						<tr>
							<td>
								<b>Subject:</b>
							</td> 
							<td>
								<input type="text"  value="<?php echo $row['subject']?>" disabled>
							</td>
						</tr>
						<tr>
							<td>
								<b>Link:</b>
							</td> 
							<td>
								<input type="text"  value="<?php echo $row['link']?>" disabled>
							</td>
						</tr>
						<tr>
							<td>
								<b>Description:</b>
							</td> 
							<td>
								<textarea rows="2" cols="40" disabled ><?php echo $row['des']?></textarea>
							</td>
						</tr><br>
						<tr>
							<td>
								<b>Date:</b>
							</td> 
							<td>
								<input type="text"  value="<?php echo $row['date']?>" disabled>
							</td>
						</tr>
					</table>
					</form>
				
				<?php
			}
			?>
			<?php
			if(isset($_POST['timetable']))
			{
				?>
					<center class="display" >Timetable</center>
					<div >
						<center>
					<table class="tt">
						<thead>
						<tr>
							<td id="td">sl.no</td>
							<td id="td">"Day "</td>
							<td id="td">"1sthour" </td>
							<td id="td">"2ndhour"</td>
							<td id="td">"3rdhour"</td>
							<td id="td">"4thhour"</td>
							<td id="td"> "break "</td>
							<td id="td">"5thhour"</td>
							<td id="td">"6thhour"</td>
							<td id="td">"7thhour"</td>		
							<td id="td">"8thhour"</td>
						</tr>
						</thead>		
					</table>
					</center>
					<?php
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"sms");
					$query = "select * from timetable";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{?>
						<center>
						<table  style="border-collapse: collapse; border: 1px #f9b0c3;" >
							<tbody class="tt">
							<tr>
								<td id="td"><?php echo $row['sl.no']?>,</td>
								<td id="td"><?php echo $row['day']?>, &nbsp <br> </td>
								<td id="td"><?php echo $row['1st hour']?>,</td>
								<td id="td"><?php echo $row['2nd hour']?>,</td>
								<td id="td"><?php echo $row['3rd hour']?>,</td>
								<td id="td"><?php echo $row['4th hour']?>,</td>
								<td id="td"><?php echo $row['Break']?>,</td>
								<td id="td"><?php echo $row['5th hour']?>,</td>
								<td id="td"><?php echo $row['6th hour']?>,</td>
								<td id="td"><?php echo $row['7th hour']?>,</td>
								<td id="td"><?php echo $row['8th hour']?>.</td>
														
								</tr>
								</tbody>
						</table>
						</center>
						


						<?php
					}
				?>


						
					</div>
					<?php
					}?>

	</div>
</body>
</html>