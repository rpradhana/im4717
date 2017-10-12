<!DOCTYPE html>
<html lang="en">
<head>
	<title>JavaJam Coffee House</title>
	<meta charset="utf-8">
	<meta http-equiv="cache-control" content="no-cache" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php
		$item0 = '';
		$item1 = '';
		$item2 = '';
		$amount0 = '';
		$amount1 = '';
		$amount2 = '';
		$total = '';

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Sanitize inputs
			$item0 = sanitize($_POST["item-0"]);
			$item1 = sanitize($_POST["item-1"]);
			$item2 = sanitize($_POST["item-2"]);
			$amount0 = sanitize($_POST["amount-0"]);
			$amount1 = sanitize($_POST["amount-1"]);
			$amount2 = sanitize($_POST["amount-2"]);

			// Check input value
			// Ignore order quantity if price doesn't match
			switch($_POST['item-0']) {
				case 2.00: $item0 = 2.00;
				break;
			}
			switch($_POST['item-1']) {
				case 3.00: $item1 = 3.00;
				break;
				case 2.00: $item1 = 2.00;
				break;
			}
			switch($_POST['item-2']) {
				case 4.75: $item2 = 4.75;
				break;
				case 5.75: $item2 = 5.75;
				break;
			}
		}

		function sanitize($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>
</head>
<body>
	<div id="wrapper">
		<header>
			<img src="img/header.jpg">
		</header>
		<div class="row">
			<div class="col-left">
				<nav>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="menu.php">Menu</a></li>
						<li><a href="music.html">Music</a></li>
						<li><a href="jobs.html">Jobs</a></li>
					</ul>
				</nav>
			</div>
			<div class="col-right">
				<div class="content">
					<h2>Coffee at JavaJam</h2>
					<form id="menu-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
						<table id="menu">
							<tr class="odd">
								<td>
									<h3>Just Java</h3>
								</td>
								<td>
									<p>
										Regular house blend, decaffeinated coffee, or flavor of the day.
									</p>
								</td>
								<td width="150px">
									<input type="radio"
									       name="item-0"
									       value="2.00"
									       onchange="handleInputChange()"
									       checked="true"> Endless Cup $2.00
								</td>
								<td width="50px"> 
									<label>Quantity</label>
									<input type="text"
									       id="amount-0"
									       name="amount-0"
									       value="<?= $amount0 ?>"
									       size="4"
									       min="0"
									       oninput="handleInputChange()">
								</td>
								<td>
									<span id="subtotal-0">
										<?php
											echo '$' . ($item0 * $amount0);
										?>
									</span>
								</td>
							</tr>
							<tr>
								<td>
									<h3>Cafe au Lait</h3>
								</td>
								<td>
									<p>
										House blended coffee infused into a smooth, steamed milk.
									</p>
								</td>
								<td width="150px">
									<ul>
										<li><input type="radio"
											       name="item-1"
											       value="3.00"
											       onchange="handleInputChange()"
											       checked="true"
											       <?php if (isset($_POST['item-1']) && $_POST['item-1'] == '3.00'): ?>checked='checked'
											       <?php endif; ?>> Double $3.00
										<li><input type="radio"
											       name="item-1"
											       value="2.00"
											       onchange="handleInputChange()"
											       <?php if (isset($_POST['item-1']) && $_POST['item-1'] == '2.00'): ?>checked='checked'
											       <?php endif; ?>> Single $2.00
									</ul>
								</td>
								<td width="50px">
									<label>Quantity</label>
									<input type="text"
									       id="amount-1"
									       name="amount-1"
									       value="<?= $amount1 ?>"
									       size="4"
									       min="0""
									       oninput="handleInputChange()">
								</td>
								<td>
									<span id="subtotal-1">
										<?php
											echo '$' . ($item1 * $amount1);
										?>
									</span>
								</td>
							</tr>
							<tr>
								<td>
									<h3>Iced Capuccino</h3>
								</td>
								<td>
									<p>
										Sweetened espresso blended with icy-cold milk and served in a chilled glass.
									</p>
								</td>
								<td width="150px">
									<ul>
										<li><input type="radio"
											       name="item-2"
											       value="4.75"
											       onchange="handleInputChange()"
											       checked="true"
											       <?php if (isset($_POST['item-2']) && $_POST['item-2'] == '4.75'): ?>checked='checked'
											       <?php endif; ?>> Single $4.75
										<li><input type="radio"
											       name="item-2"
											       value="5.75"
											       onchange="handleInputChange()"
											       <?php if (isset($_POST['item-2']) && $_POST['item-2'] == '5.75'): ?>checked='checked'
											       <?php endif; ?>> Double $5.75
									</ul>
								</td>
								<td width="50px">
									<label>Quantity</label>
									<input type="text"
									       id="amount-2"
									       name="amount-2"
									       value="<?= $amount2 ?>"
									       size="4"
									       min="0"
									       oninput="handleInputChange()">
								</td>
								<td>
									<span id="subtotal-2">
										<?php echo '$' . ($item2 * $amount2);
										?>
									</span>
								</td>
							</tr>
							<tr height="50px">
								<td colspan="4"></td>
								<td width="60px">
									<strong>TOTAL
										<span id="total">
											<?php
												$total = (($item0 * $amount0) + ($item1 * $amount1) + ($item2 * $amount2));
												echo '$' . $total;
											?>
										</span>
									</strong>
									<button class="btn primary submit" name="submit" value="Submit" onclick="alert('Thank you for your order!')">Order</button>
								</td>
							</tr>
						</table>
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
	<script type="text/javascript" src="js/menu.js"></script>
</body>
</html>
