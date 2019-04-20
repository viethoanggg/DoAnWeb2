<?php 
	/**
	 *  
	 */
	class cart
	{
		/*Lấy masachn từ chọn mua*/
		public static function addcart(){
			require('DataProvider.php');
			if(isset($_GET['masach']))
				$MaSach=$_GET['masach'];
			/*Khởi tạo session*/
			if(isset($MaSach)){
				if(isset($_SESSION['cart'])){//Kiểm tra giỏ hàng đã tồn tại chưa
				if(isset($_SESSION['cart'][$MaSach])){//Tồn tại mã sách này thì tăng lên 1
					$_SESSION['cart'][$MaSach]['sl']+=1;
				}
				else{
					$_SESSION['cart'][$MaSach]['sl'] = 1;//Chưa tồn tại mã sách này thì tạo giá trị ban đầu cho nó
				}
			}
			else{//Chưa tồn tại thì tạo session với sl=1
				$_SESSION['cart'][$MaSach]['sl'] = 1;
			}

		}
		header("Location: ../php/chitietsach.php?theloai=".$_GET['theloai']."&masach=".$MaSach."");exit();
	}
}
?>