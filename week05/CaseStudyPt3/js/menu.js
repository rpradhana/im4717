function handleInputChange() {
	var javaQuantity = document.getElementById("amount-1").value;
	var cafeQuantity = document.getElementById("amount-2").value;
	var capuccinoQuantity = document.getElementById("amount-3").value;

	if (validateInput(javaQuantity, cafeQuantity, capuccinoQuantity)) {
		var javaTotal = getSubtotal('java', javaQuantity);
		var cafeTotal = getSubtotal('cafe', cafeQuantity);
		var capuccinoTotal = getSubtotal('capuccino', capuccinoQuantity);
		
		document.getElementById("total").innerHTML = '$' + (javaTotal + cafeTotal + capuccinoTotal);
	}
	else {
		alert("Please enter a valid quantity!");
		document.getElementById("total").innerHTML = "Enter a valid quantity!";
	}
}

function validateInput(javaQ, cafeQ, capuccinoQ) {
	return !(isNaN(javaQ) || isNaN(cafeQ) || isNaN(capuccinoQ))
}

function getSubtotal(type, q) {
	var total;

	switch(type) {
		case 'java':
			total = q * 2.00;
			document.getElementById("subtotal-1").innerHTML = '$' + total;
			return total;
		case 'cafe':
			var option = document.getElementsByName("item-2");
			var isSingle = option[0].checked ? true : false;
			total = isSingle ? q * 2.00 : q * 3.00;
			document.getElementById("subtotal-2").innerHTML = '$' + total;
			return total;
		case 'capuccino':
			var option = document.getElementsByName("item-3");
			var isSingle = option[0].checked ? true : false;
			total = isSingle ? q * 4.75 : q * 5.75;
			document.getElementById("subtotal-3").innerHTML = '$' + total;
			return total;
		default:
			break;
	}
}