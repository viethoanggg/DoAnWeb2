function addCart(id,sl) {
	$.ajax({
		type: "GET",
		url: "addcart.php",
		data: {
			"masach": id,
			"sl": sl
		}
	})
}

function hello(id,sl){
	alert("Xin chao");
	alert(id);
	alert(sl);
	//alert(document.getElementById("soluong").value);
}