<?php
	
	require('DataProvider.php');
	if(isset($_GET['MaHD']) && isset($_GET['MaSach']) )
	{
		//cap nhat trang thai chi tiet hoa don
		$sql="update chitiethoadon set TinhTrangCT='".$_GET['tinhtrang']."' where MaHD='".$_GET['MaHD']."' and MaSach='".$_GET['MaSach']."'";
		DataProvider::executeQuery($sql);
		
		//cap nhat trang thai hoa don
		$sql="select * from  chitiethoadon where MaHD='".$_GET['MaHD']."'";
		$result=DataProvider::executeQuery($sql);
		$flag=1;
		while($row=mysqli_fetch_array($result))
		{
			if($row['TinhTrangCT']=="Hàng đang nhập từ kho")
			{
				$flag=0;
				break;
			}				
		}
		if($flag==1)
		{
			$sql="update hoadon set TinhTrang='Đã thanh toán xong' where MaHD='".$_GET['MaHD']."'";
			DataProvider::executeQuery($sql);
		}
		else if($flag==0)
		{
			$sql="update hoadon set TinhTrang='Chưa thanh toán xong' where MaHD='".$_GET['MaHD']."'";
			DataProvider::executeQuery($sql);
		}
		
	}
	
?>