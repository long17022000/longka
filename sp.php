<?php Session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	.img{width: 140px; height: 160px; float: left; margin-left: 5px; margin-top:10px; text-align:center}
	.menu{background: #ccc; font-size: 20px; text-align: right; padding-right: 100px;}
	 a {text-decoration: none;} 
	 .text{ font-weight:bold; font-size:30px; font-family:Georgia, "Times New Roman", Times, serif; text-align:center; padding-top:10px; height:50px}
</style>
</head>
<body>

	<div class="menu">
		<div class="text">Quản lí sản phẩm</div>
	<a href="file:///C|/xampp/htdocs/long/web/form.php">Thêm mới</a>
	<a href="file:///C|/xampp/htdocs/long/web/list.php">Thoát</a>
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