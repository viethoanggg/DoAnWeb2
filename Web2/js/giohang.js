function addCart(id,sl) {
	if(sl>0) {
		$.ajax({
			type: "GET",
			url: "addcart.php",
			data: {
				"masach": id,
				"sl": sl
			}
		}).done(function(data){
				myFunction();
				$.get('sl.php',function(data){
									console.log(data);
					$(".badge.badge-secondary ").html("<span>"+data+"</span>");	
				})
				// $(".badge.badge-secondary ").html("<span>"+s+"</span>");
			})
	}
	else{
		alert("Bạn nhập số lượng không phù hợp!!!");
		$('#soluong').val('1');
	}
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
function drop(){
	//alert('Xin chao');
	if(document.getElementById(`soluong`).value < 2){
		document.getElementById(`soluong`).value = 2;
	}
}