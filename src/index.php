<?php 
	session_start();
	if (!isset($_SESSION['hello'])) {
		$_SESSION['hello'] = "";
	}
?>

<!DOCTYPE html>
<html lang="en" xml:lang="en">
	<head>
		<title>ICT3x03 | PHP Form XSS Test</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<div class="container">
			<h1>ICT3x03 Lab Test Jerone Poh 1902606</h1>
			<form action="" method="post">
				<div class="field-container">
					<label>Search</label>
					<input type="text" id="search" name="search" required placeholder="">
				</div>
				<div class="field-container">
					<button type="submit" name="submit" onclick="return checkXSS()">Search</button>
				</div>
				
			</form>
		</div>
		<script type="text/javascript" src="js/xss.js"></script>
	</body>
</html>