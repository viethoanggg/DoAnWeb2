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
function myFunction() {
		var x = document.getElementById("snackbar");
		x.className = "show";
		setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
	}
function hello(id,sl){
	alert("Xin chao");
	alert(id);
	alert(sl);
	//alert(document.getElementById("soluong").value);
}