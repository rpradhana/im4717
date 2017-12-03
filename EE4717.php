<!DOCTYPE html>
<html lang="en-GB">
<meta charset="utf-8">
<head>
	<title>EE4717</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="icon" type="image/png"  href="./static/images/favicon.png">
	<style type="text/css">

		/**
		 * Element styling
		 */
		body {}

		/**
		 * Custom font declaration
		 */
		@font-face {
			font-family: 'Graublau Web';
			src: url('GraublauWeb.eot?') format('eot'),
				 url('GraublauWeb.woff') format('woff2'),
				 url('GraublauWeb.woff') format('woff'),
				 url('GraublauWeb.ttf') format('truetype');
		}

		/**
		 * Classes
		 */
		.css {
			font-family: "Graublau Web", Verdana, Calibri, Arial, sans-serif;
			background: #CCCCCC;
			color: #000066;
			background: #FFFFFF;
			max-width: 90%;
			min-width: 900px;
			padding: 0;

			/* Align center for position: relative*/
			margin: auto;

			/**
			 * 4: Top, Right, Bottom, Left
			 * 3: Top, Right+Left, Bottom
			 * 2: Top+Bottom, Right+Left
			 * 1: All sides
			 */
			border: 1px 2px 3px 4px solid #0099CC;
		}

		/**
		 * Media queries
		 */
		@media screen and (max-width: 1280px) and (min-width: 768px){
			.css {}
		}
	</style>
</head>
<body>
	<div id="" class="">
		<form id=""
		      name=""
		      onsubmit="return validate()"
		      action="newpage.php"
		      method="">
			<button type=""></button>
			<input type=""
				   name=""
				   onclick=""
				   placeholder=""
				   required>
			<label for="input-with-label">
				<input type="checkbox"
					   name="input-with-label"
					   value=""
					   checked>
			</label>
		</form>
		<img src="" alt="">
		<a href="" target="_blank"></a>
		<a href="tel:+6598765432"></a>
		<a href="mailto:address@domain.com"></a>
		<aside></aside>
		<video poster="" controls>
			<source src=""
					type="video/mp4">
		</video>
		<audio src="" controls>
			<source src="" type="audio/ogg">
		</audio>
	</div>

	<!-- PHP -->

	<?php
		define(name, value)
		session_start();

		$DBServer = 'server name or IP address'; // e.g 'localhost' or '192.168.1.100'
		$DBUser   = 'DB_USER';
		$DBPass   = 'DB_PASSWORD';
		$DBName   = 'DB_NAME';
		$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);

		if ($conn->connect_error) {
			//Fallback if unable to connect to database
			include_once ('./php/error.php');
			exit();
		}

		$query = "SELECT p.id, p.name, p.price, p.discount, COUNT(*) AS numberOfTimesBought
		          FROM products AS p,
		               inventory AS i,
		               orders_inventory AS oi
		          WHERE i.id = oi.inventoryIDAND p.id = i.productsID
		          GROUP BY(p.id)
		          ORDER BY numberOfTimesBought
		          LIMIT 0,4;";

		$result = $conn->query($query);

		/**
		 * Generate from database recursively
		 */
		if ($result) {
			$num_rows = $result->num_rows;
			if ($num_rows > 0) {
				for ($i = 0; $i < $num_rows; $i++) {
					$row = $result->fetch_assoc();
					$product_id   = $row["id"];
					$product_name = $row["name"];
					echo '
						<div>
							<span>' . $product_name . '</span>
						</div>';
				}
			}
		}

		/**
		 * isset check for superglobals
		 */
		if (isset($_POST["mail"]) && !empty($_POST["mail"])) {
			echo "Yes, mail is set";    
		} else {
			echo "N0, mail is not set";
		}

		if (isset($_SESSION['valid_user'])) {
			echo 'You are logged in as: ' . $_SESSION['valid_user'];
		}

		if (isset($_GET["sortby"])) {
			$sortby = $_GET["sortby"];
		}

		/**
		 * Sending mails
		 */
		$to      = 'address@domain.com';
		$subject = 'subject';
		$message = 'message';
		$headers = 'From: address@domain.com' . '\r\n' .
		           'Reply-To: address@domain.com' . '\r\n' .
		           'X-Mailer: PHP/' . phpversion();

	?>

	<?php include './external.php' ?>

	<!-- JS -->

	<script type="text/javascript">
		var regex = /[A-Za-z]/;
		regex.test('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
		var element  = document.getElementById('id');
		var elements = document.getElementsByClassName('id');
		var element  =  document.querySelector('#id');
		var elements =  document.querySelector('.class');

		var Object = function(args) {
			this.args = args;

			Object.prototype.method_name = function(first_argument) {
				// body...
			};
		}
	</script>

	<script type="text/javascript" src='./js/main.js'></script>
</body>
</html>
