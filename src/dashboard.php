<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="en" xml:lang="en">
	<head>
		<title>Dashboard | ICT3x03 Test</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<div class="container-dashboard">
			Searched Term to be displayed here: <span class="user-name"><?php $_SESSION['hello']?></span> 
			<br>
			
			<a href="index.php" class="logout-link">Back to Search Page</a>
		</div>
	</body>
</html>