<script type="text/javascript">
	if(confirm("Are you sure want to delete ?"))
	{
		document.write("<?php 
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sms");
		$query = "delete from students where roll_no = $_POST[roll_no]";
		$query_run = mysqli_query($connection,$query);
		?>");
	 	window.location.href = "teacher_dashhhhboard.php";
	}
	else
	{
		window.location.href = "teacher_dashhhhboard.php";
	}
</script>
