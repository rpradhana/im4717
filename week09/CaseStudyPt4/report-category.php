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

		$variant1 = 0;
		$variant2 = 0;
		$variant3 = 0;
		$variant4 = 0;
		$variant5 = 0;

		// Create connection
		$conn = new mysqli($servername, $username, $password, $database);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		echo '<script>console.log("Connection established")</script>';

		for ($ii = 1; $ii <= 5; $ii++) {
			$order[$ii] = $conn->query("
				SELECT *
				FROM
				(
				    SELECT *
					FROM `receipt` LEFT JOIN `receiptorder` ON `receipt`.`ID` = `receiptorder`.`ReceiptID`
				) as orders LEFT JOIN productvariant ON orders.ProductVariantID = productvariant.ID

				WHERE orders.ProductVariantID =" . $ii . "
				AND DATE(orders.TS) = CURDATE()"
			);
		}

		while ($row = $order[1]->fetch_assoc()) {
			$variant1 += ($row["Quantity"]);
		};
		while ($row = $order[2]->fetch_assoc()) {
			$variant2 += ($row["Quantity"]);
		};
		while ($row = $order[3]->fetch_assoc()) {
			$variant3 += ($row["Quantity"]);
		};
		while ($row = $order[4]->fetch_assoc()) {
			$variant4 += ($row["Quantity"]);
		};
		while ($row = $order[5]->fetch_assoc()) {
			$variant5 += ($row["Quantity"]);
		};

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
					<h2>Sales Quantities by Product Categories</h2>
					<ul>
						<li>Just Java Endless Cup: <?= $variant1 ?></li>
						<li>Cafe Au Lait Single: <?= $variant2 ?></li>
						<li>Cafe Au Lait Double: <?= $variant3 ?></li>
						<li>Iced Cappuccino Single: <?= $variant4 ?></li>
						<li>Iced Cappuccino Double: <?= $variant5 ?></li>
					</ul>
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


