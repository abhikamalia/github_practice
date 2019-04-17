
<?php include('connect.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div align="center">
		<h2>GitHub Practice</h2>
		<h4>Hey there...</h4>
		
		<form action = "index.php" method = "post">
			<input type ="text" name ="name" style = "width:50%">
			<input type ="submit" name = "submit" value ="submit">
		</form>
		<a type="button" class="btn btn-primary" href="index2.php" style="background: blue;color: white;font-size: 20px;"> Click</a>
	</div>
</body>
</html>
<?php
	$name = $_POST['name'];
	$query = "INSERT INTO git(name) VALUES(?)";
	$statement = $database -> prepare($query);
	$statement -> bind_param('s' , $name);
	$statement -> execute();
	$result = mysqli_query($database , $query);
	if($result){
		echo "Inserted";
	}
	else{
		echo "not inserted";
	}
?>
