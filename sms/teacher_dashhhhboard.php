<!DOCTYPE html>
<html>
<head>
	<title>Teacher Dashboard</title>
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
		#left_side{
			margin-left: 45px;
			background-color: #ceb6d9;
			height: 69%;
			width: 14%;
			top: 25%;
			position: fixed;
			border-radius: 25px;
			max-width: 500px;
			padding-bottom:80px;
			padding-top: 0px;
			border: 2px solid ;
			align-items: center;

		}
		#right_side{
			height: 79%;
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
		
		#td{
			display: block;
			border-radius: 2rem solid black;
			padding-left: 2px;
			text-align: center;
			width: 200px;
			margin:  2rem auto;
			padding: 0px 1px 0px 0px ;
		}

		.button{
			 border: none;
 			 color: #008CBA ;
  			 padding: 10px, 15px;
  			 text-align: center;
   			 display: inline-block;
  			 font-size: 15px;
  			 margin: 4px 2px;
  			 border-radius: 25px;
		}
		.display{
			max-width: 500px;
			margin:  2rem auto;
			border: 2px solid ;
			padding: 2rem;
			border-radius: 2rem;
			&:hover{
			background-color: #3498D6;

		}
		.child {
  			width: 50px;
  			height: 50px;
  			background-color: red;
 
  			position: absolute;
  			top: 50%;
  			left: 50%;
  			margin: -25px 0 0 -25px; 
		}
		#leftside input[type="submit"] { 
  			border: none;
  			outline: none;
  			height: 40px;
  			color: #000;
  			font-size: 18px;
  			border-radius: 20px;
  		}
  		#leftside input[type="submit"]:hover
  		{
  			cursor: pointer;
  			background: #e3abce;
  			color: #000;
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
	<style>
		body {
  			background-image: url('bg1.jpg');
  			height: 560px;
  			background-position: center;
  			width: 100px;
  			background-size: cover;
  			background-repeat: no-repeat;
			}
	</style>
	<div id="header"><br>
		<center><b style="color: darkblue;">Student Teacher Discussion Form 
			<button class="button button1" style="float:right" ><a href="logout.php" >Logout</a></button>
		<p style="color: darkblue;"> A user friendly website for minimal and important information exchange between student and teacher.</p> <!---</b>Email:  <?php echo $_SESSION['email'];?> Name:  <?php echo $_SESSION['name'];?>-->
		
		
	</div>	
	
	<!--<span id="top_span"><marquee>Note:- This portal is open till 31 March 2020...Plz edit your information, if wrong.</marquee></span>-->
	<div id="left_side" >
		<br><br><br>
		<!--<div class="display">-->
		<form  action="" method="post">
			
			<table>
				<tr>
					<td>
						<input type="submit" name="search_student" value="Search Student    "><br><br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="edit_student" value="Edit Student         "><br> <br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="add_new_student" value="Add New Student"><br><br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="delete_student" value="Delete Student     "><br><br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="show teacher" value="Show Teachers     "><br><br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="notice_board" value="Notice board     "><br><br>
					</td>
				</tr>
			</table>
	
		</form>
		</div>
	<!--</div>-->
	<div id="right_side"><br><br>
		
		<!-- #Code for search student---Start-->
			<?php
				if(isset($_POST['search_student']))
				{
					?>
					<center>
					<form action="" method="post">
					&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no"><br><br>
					<input type="submit" name="search_by_roll_no_for_search" value="Search"><br><br>
					</form><br><br>
					<h4><b>Student's details</b></h4><br><br
					</center>
					<?php
				}
				if(isset($_POST['search_by_roll_no_for_search']))
				{
					$query = "select * from students where roll_no = '$_POST[roll_no]'";
					$query_run = mysqli_query($connection,$query);
					$row = mysqli_fetch_assoc($query_run);
					/*while ($row) */
					
						?>
					<div class="display">
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
									<textarea rows="2" cols="40" disabled><?php echo $row['remark']?></textarea>
								</td>
							</tr>
						</table>
					</div>
						<?php
				}
				
			?>
		<!-- #Code for edit student details---Start-->
		<?php
			if(isset($_POST['edit_student']))
			{
				?>
				<center>
				<form action="" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input type="submit" name="search_by_roll_no_for_edit" value="Search">
				</form><br><br>
				<h4><b>Student's details</b></h4><br>
				</center>
				<?php
			}
			if(isset($_POST['search_by_roll_no_for_edit']))
			{
				$query = "select * from students where roll_no = $_POST[roll_no]";
				$query_run = mysqli_query($connection,$query);
				$row = mysqli_fetch_assoc($query_run);
				/*while ($row) */
				
					?>
					<div class="display">
					<form action="teacher_edit_student.php" method="post">
						

						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text"  value="<?php echo $row['roll_no']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text"  value="<?php echo $row['name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Father's Name:</b>
							</td> 
							<td>
								<input type="text"  value="<?php echo $row['father_name']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Class:</b>
							</td> 
							<td>
								<input type="text"  value="<?php echo $row['class']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text"  value="<?php echo $row['mobile']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text"  value="<?php echo $row['email']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password"  value="<?php echo $row['password']?>">
							</td>
						</tr>
						<tr>
							<td>
								<b>Remark:</b>
							</td> 
							<td>
								<textarea rows="1" cols="40" ><?php echo $row['remark']?></textarea>
							</td>
						</tr><br>
						<tr>
							<td></td>
							<td>
								<button class="button button5" id= "add" style="float:right" ><input type="submit" name="edit" value="Save"></button>
							</td>
						</tr>
					</table>
					</form>
				</div>
				
					<?php
				
			}
		
		?>
		<!-- #Code for Delete student details---Start-->
		<?php
			if(isset($_POST['delete_student']))
			{
				?>
				<center>
				<form action="delete_student.php" method="post">
				&nbsp;&nbsp;<b>Enter Roll No:</b>&nbsp;&nbsp; <input type="text" name="roll_no">
				<input type="submit" name="search_by_roll_no_for_delete" value="Delete">
				</form><br><br>
				</center>
				<?php
			}
			?>

			<?php 
				if(isset($_POST['add_new_student'])){
					?>
					<center><h4>Fill the given details</h4></center>
					<form action="add_student.php" method="post">
						<div class="display"> 
						<table>
						<tr>
							<td>
								<b>Roll No:</b>
							</td> 
							<td>
								<input type="text" name="roll_no" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Name:</b>
							</td> 
							<td>
								<input type="text" name="name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Father's Name:</b>
							</td> 
							<td>
								<input type="text" name="father_name" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Class:</b>
							</td> 
							<td>
								<input type="text" name="class" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Mobile:</b>
							</td> 
							<td>
								<input type="text" name="mobile" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Email:</b>
							</td> 
							<td>
								<input type="text" name="email" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Password:</b>
							</td> 
							<td>
								<input type="password" name="password" required>
							</td>
						</tr>
						<tr>
							<td>
								<b>Remark:</b>
							</td> 
							<td>
								<textarea rows="3" cols="40" placeholder="Optional" name="remark"></textarea>
							</td>
						</tr>
						<tr>
							<td></td>
							<td><br><input type="submit" name="add" value="Add Student"></td>
						</tr>
					</table>
					</div>
					</form>
					<?php
				}
			?>
			<?php
				if(isset($_POST['show_teacher']))
				{
					?>

					<center>
						<h5>Teacher's Details</h5>
					</center>

						<table class="display">
							<tr>
								<td ><b>ID :</b><br></td>
								<td ><b>Name : </b><br></td>
								<td ><b>Mobile:</b><br></td>
								<td ><b>Courses:</b><br></td>
								<td ><b>View Detail: </b><br></td>
							</tr>
						</table>
					
					<?php
					$query = "select * from teachers";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						
						<table  class="display">
							<tr>
								<td ><?php echo $row['t_id']?>,<br></td>
								<td ><?php echo $row['name']?>,<br></td>
								<td ><?php echo $row['mobile']?>,<br></td>
								<td ><?php echo $row['courses']?>,<br></td>
								<td ><a href="#">View</a></td>							
								</tr>
						</table>
						
						<?php
					}
				}
			?>


			<?php
				if(isset($_POST['notice_board']))
				{
					header("Location: notice.php");
				}
			?>
		</div>
	</div>
</body>
</html>