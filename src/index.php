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
			<form action="" method="post" onsubmit="return checkXSS()">
				<div class="field-container">
					<label>Search</label>
					<input type="text" id="search" name="search" required placeholder="">
				</div>
				<div class="field-container">
					<input type="submit" name="Search"></button>
				</div>
				
			</form>
		</div>
		<script src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/xss.js"></script>
	</body>
</html>