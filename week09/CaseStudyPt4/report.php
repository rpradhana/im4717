<!DOCTYPE html>
<html lang="en">
<head>
	<title>JavaJam Coffee House</title>
	<meta charset="utf-8">
	<meta http-equiv="cache-control" content="no-cache" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php
		/**
		 * Connect DB
		 */
		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "f36im";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $database);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		echo '<script>console.log("Connection established")</script>';

		/**
		 * Update DB
		 */
		// for ($ii = 0; $ii < count($price); $ii++) {
		// 	$price = sanitize($_POST["price"]);
		// }
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			$generateBy = sanitize($_POST["generate-by"]);
			if ($generateBy == 'product') {

			}
			// for ($ii = 0; $ii < count($_POST["price"]); $ii++) {
			// 	$prices[$ii] = sanitize($_POST["price"][$ii]);
			// 	echo '<script>console.log(' . $prices[$ii] . ')</script>';
			// 	$conn->query("UPDATE `productvariant` SET `Price` = " . $prices[$ii] . " WHERE . `productvariant`.`ID` = " . ($ii+1));
			// }
			echo '<script>console.log("Database update success.")</script>';
		} else {
		echo '<script>console.log("Database update failed.")</script>';
		}

		/**
		 * Sanitize
		 */
		function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>
	<div id="wrapper">
		<header>
			<img src="img/header.jpg">
		</header>
		<div class="row">
			<div class="col-left">
				<nav class="product-price-update">
					<h3>Daily Sales Report</h3>
				</nav>
			</div>
			<div class="col-right">
				<div class="content">
					<h2>Generate Daily Sales Report</h2>
					<form name="generate" method="post" action="report-product.php">
						<div class="box"></div><input type='submit' class="generateinput" value='Total dollar sales by product' onclick="this.form.target='_blank'; return true;"><br>
						<div class="box"></div><input type='submit' class="generateinput" value='Sales quantities by product categories' onclick="generate.action='report-category.php'; return true;">
					</form>
				</div>
			</div>
		</div>
		<footer>
			Copyright &copy; 2014 JavaJam Coffee House
			<br>
			<a href="mailto:raymond@pradhana.com">raymond@pradhana.com</a>
		</footer>
	</div>
	<script type="text/javascript" src="js/report.js"></script>
</body>
</html>


