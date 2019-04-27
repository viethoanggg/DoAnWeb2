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
			$.get('sl.php',{xh:1},function(data){
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
function xoasp(masach){
	if(confirm("Bạn có chắc muốn xoá???")){
		$.ajax({
			type: "GET",
			url: "updategiohang.php",
			data: {
				"masach": masach,
			}
		}).done(function(data){
			// console.log(data);
			debugger;
			alert(JSON.parse(data).masach);
			alert(JSON.parse(data).sl);

			$("tr#"+masach+"").hide();
		})
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