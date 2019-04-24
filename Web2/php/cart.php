<?php 
class cart
{
	/*Lấy masachn từ chọn mua*/
	public static function addcart(){
		require('DataProvider.php');
		if(isset($_GET['masach'])){//Kiểm tra sản phẩm có tồn tại hay không
			$sql="SELECT *
			FROM sach
			WHERE MaSach='".$_GET['masach']."'";
			$result=DataProvider::executeQuery($sql);
			$row=mysqli_fetch_array($result);
			var_dump($row);
			if(!$row){
				echo "Không tồn tại sản phẩm!!!Đang trở lại trang chủ!!!";
				header('Refresh: 3;URL=../index.php');
			}
			else{
				$MaSach=$_GET['masach'];
				if(!empty($_SESSION["cart"])){
					$cart=$_SESSION["cart"];
					if(array_key_exists($MaSach,$cart)){
						$cart[$MaSach] = array(
							"sl"=>(int)$cart[$MaSach]['sl']+(int)$_GET['sl'],
							"tensach"=>$row['TenSach'],
							"hinhanh"=>$row['HinhAnh'],
							"gia"=>$row['Gia'],
							"theloai"=>$row['MaTheLoai']
						);
					}
					else{
						$cart[$MaSach] = array(
							"sl"=>(int)$_GET['sl'],
							"tensach"=>$row['TenSach'],
							"hinhanh"=>$row['HinhAnh'],
							"gia"=>$row['Gia'],
							"theloai"=>$row['MaTheLoai']
						);	
					}
				}
				else{
				//Lần đầu mua hàng
					$cart[$MaSach] = array(
						"sl"=>(int)$_GET['sl'],
						"tensach"=>$row['TenSach'],
						"hinhanh"=>$row['HinhAnh'],
						"gia"=>$row['Gia'],
						"theloai"=>$row['MaTheLoai']
					);	
				}
				$_SESSION["cart"]=$cart;
			}
			// else {
			// 	$MaSach=$_GET['masach'];
			// 	if(isset($MaSach)){

			// 	if(isset($_SESSION['cart'])){//Kiểm tra giỏ hàng đã tồn tại chưa
			// 	if(isset($_SESSION['cart'][$MaSach])){//Tồn tại mã sách này thì cộng số lượng sách được thêm
			// 		$_SESSION['cart'][$MaSach]['sl']+=$_GET['sl'];//
			// 	}
			// 	else{
			// 		$_SESSION['cart'][$MaSach]['sl']=0;//Chưa tồn tại mã sách này thì tạo giá trị ban đầu cho nó
			// 		$_SESSION['cart'][$MaSach]['sl']+=$_GET['sl'];
			// 	}
			// 	//header("Location: ../php/chitietsach.php?theloai=".$_GET['theloai']."&masach=".$MaSach."");exit();
			// }
			// else{//Chưa tồn tại thì tạo session với sl=0
			// 	$_SESSION['cart'][$MaSach]['sl']=0;
			// 	$_SESSION['cart'][$MaSach]['sl']+=$_GET['sl'];
			// 	//header("Location: ../php/chitietsach.php?theloai=".$_GET['theloai']."&masach=".$MaSach."");exit();
			// }

	// 	}
	// }
		}
	}
	/*Khởi tạo session*/
}
?>