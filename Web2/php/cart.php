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
			if(!$row){
				echo "Không tồn tại sản phẩm!!!Đang trở lại trang chủ!!!";
				header('Refresh: 3;URL=../index.php');
			}
			else {
				$MaSach=$_GET['masach'];
			}
		}
		/*Khởi tạo session*/
		if(isset($MaSach)){
				if(isset($_SESSION['cart'])){//Kiểm tra giỏ hàng đã tồn tại chưa
				if(isset($_SESSION['cart'][$MaSach])){//Tồn tại mã sách này thì cộng số lượng sách được thêm
					$_SESSION['cart'][$MaSach]['sl']+=$_GET['sl'];//
				}
				else{
					$_SESSION['cart'][$MaSach]['sl'] = 1;//Chưa tồn tại mã sách này thì tạo giá trị ban đầu cho nó
				}
				//header("Location: ../php/chitietsach.php?theloai=".$_GET['theloai']."&masach=".$MaSach."");exit();
			}
			else{//Chưa tồn tại thì tạo session với sl=1
				$_SESSION['cart'][$MaSach]['sl'] = 1;
				//header("Location: ../php/chitietsach.php?theloai=".$_GET['theloai']."&masach=".$MaSach."");exit();
			}

		}
	}
}
?>