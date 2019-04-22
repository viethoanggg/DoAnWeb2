function addCart(id) {
	$.ajax({
		type: "GET",
		url: "assets/php/action/addToCart.php",
		data: {
			"id": id
		}
	})
}

function hello(id,sl){
	alert("Xin chao");
	alert(id);
	//alert(document.getElementById("soluong").value);
}