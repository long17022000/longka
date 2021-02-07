<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
<style>
</style>
</head>
<body>
	<?php 
		$sql_select="select * from themmoi where code='$layma'";
		$run_select=mysqli_query($conn,$sql_select);
		$row_select=mysqli_fetch_array($run_select);
	?>
</body>
</html>
