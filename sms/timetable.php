
<!DOCTYPE html>
<html>
<head>
	<title>Time table</title>
</head>
<body>
	<table>
		<tr>
		<th>1st hour</th>
		<th>2nd hour</th>
		<th>3rd hour</th>
		<th>4th hour</th>
		<th>break</th>
		<th>5th hour</th>
		<th>6th hour</th>
		<th>7th hour</th>
		<th>8th hour</th>
		</tr>
		<?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");


		$query = "select * from time_table where email = '$_SESSION[email]'";
	?>
	</table>
</body>
</html>