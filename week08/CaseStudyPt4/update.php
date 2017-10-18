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
			for ($ii = 0; $ii < count($_POST["price"]); $ii++) {
				$prices[$ii] = sanitize($_POST["price"][$ii]);
				echo '<script>console.log(' . $_POST["price"][$ii] . ')</script>';
				$conn->query("UPDATE `productvariant` SET `Price` = " . $prices[$ii] . " WHERE . `productvariant`.`ID` = " . ($ii+1));
			}
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
					<h3>Product Price Update</h3>
				</nav>
			</div>
			<div class="col-right">
				<div class="content">
					<form id="product-update" method="POST" action="update.php">
						<h2>Click to update product prices:</h2>
						<table class="products">
							<?php
								$products = $conn->query("SELECT * FROM Product");

								// Check query
								if (!$products) {
									trigger_error('Invalid query: ' . $conn->error);
								}

								// Output data of each product
								while ($products_row = $products->fetch_assoc()) {
									$variants = $conn->query("SELECT * FROM ProductVariant WHERE ProductID=" . $products_row["ID"]);
									echo '
										<tr class="product product-'.$products_row["ID"].'">
											<td>
												<input type="checkbox" name="update-toggle[]" autocomplete="off" onclick="toggleInput('.$products_row["ID"].')">
											</td>
											<td>
												<h3>'.$products_row["Name"].'</h3>
											</td>
											<td>
												<p>'.$products_row["Description"].'</p>
												<p>';

												// Output data of each variant
												while ($variants_row = $variants->fetch_assoc()) {
													echo
													'<span class="variant">' . $variants_row["Variant"] .
														' $<span class="price">' . $variants_row["Price"] . '</span>
														<input type="text" name="price[]" class="price-input" size="" autocomplete="off" onchange="handleInputChange()" value="' . $variants_row["Price"] . '"></input>' .
														// ' $<input type="text" name="price[]" class="price" size="" value="' . $variants_row["Price"] . '" disabled></input>' .
													'</span>';
												};

												echo '
												</p>
											</td>
										</tr>
									';

								};
							?>
						</table>
						<button type="submit" class="btn primary submit" onclick="return handleSubmit()">Update Prices</button>
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
	<script type="text/javascript" src="js/update.js"></script>
</body>
</html>


