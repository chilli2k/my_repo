<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	


		</div>
			<?php 
				if(isset($_POST['submit'])){
					
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
								<td ><a href="#" disabled>View</a></td>	
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
				</div>
				<?php
			}
			?>
				
		<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"sms");
	$query = "insert into notice values('','$_POST[subject]','$_POST[link]','$_POST[description]')";
	$query_run = mysqli_query($connection,$query);
	?>
<script type="text/javascript">
	alert("Updated successfully.");
	window.location.href = "teacher_dashhhhboard.php";
</script>

</body>
</html>