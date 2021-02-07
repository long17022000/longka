<?php Session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
</style>
</head>
<body>

	<div class="menu">
		<div class="text">Quản lí sản phẩm</div>
	</div>

	<?php
	include('file:///C|/xampp/htdocs/long/web/connect.php');
	$sql= "select * from  themmoi";
	$run=mysqli_query($conn, $sql);
	while($row=mysqli_fetch_array($run))
	{
?>
	
	<div class="img">
	<img src="img/<?php echo $row['Picture'] ?>" width="120px" height="120px" 
				style="border-radius: 30px">
	<a href="file:///C|/xampp/htdocs/long/web/edit2.php?sua=<?php echo $row['Code']; ?>">edit</a>&nbsp;&nbsp;
	<a href="file:///C|/xampp/htdocs/long/web/delete2.php?xoa=<?php echo $row['Code']; ?>">remove</a>
	</div>
	</div><?php }?>

</body>
</html>