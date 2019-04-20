<?php

	require('DataProvider.php');
	if(isset($_POST['masach']))
	{
		$masach=$_POST['masach'];
		
		//------------------------Sua trong database sach-----------------------------------------------//
		
		$sql="UPDATE sach SET "
		.	"MaTheLoai='".$_POST['matheloai']."', "
		.	"TenSach='".$_POST['tensach']."', "
		.	"TenTacGia='".$_POST['tentacgia']."', ";
		if(isset($_FILES['hinhanh']))
			$sql=$sql .	"HinhAnh='".$_FILES['hinhanh']['name']."', ";
		$sql=$sql .	"Gia='".(int)$_POST['gia']."' "
		.	"WHERE MaSach='".$_POST['masach']."'";
		DataProvider::executeQuery($sql);

//------------------------------------------------Xử lý chuyển file ảnh-------------------------------------------------------------------//	
		
		if(isset($_FILES['hinhanh']) && $_FILES['hinhanh']['size'] < 2000000 )
		{	
			$tmp_name=$_FILES['hinhanh']['tmp_name'];
			$matheloai=$_POST['matheloai'];
			if($matheloai=="NN")
				$imageURL="../images/ngoaingu/".$_FILES['hinhanh']['name'];
			else if($matheloai=="KT")
				$imageURL="../images/kinhte/".$_FILES['hinhanh']['name'];
			else if($matheloai=="KNS")
				$imageURL="../images/kynangsong/".$_FILES['hinhanh']['name'];
			else if($matheloai=="LS")
				$imageURL="../images/lichsu/".$_FILES['hinhanh']['name'];
			else if($matheloai=="CN")
				$imageURL="../images/chuyennganh/".$_FILES['hinhanh']['name'];
			else if($matheloai=="TN")
				$imageURL="../images/thieunhi/".$_FILES['hinhanh']['name'];
			else if($matheloai=="TT")
				$imageURL="../images/tuoiteen/".$_FILES['hinhanh']['name'];
			else if($matheloai=="VH")
				$imageURL="../images/vanhoc/".$_FILES['hinhanh']['name'];
			move_uploaded_file($tmp_name,$imageURL);
		}
		
		//------------------------Sua trong database chi tiet sach-----------------------------------------------//
		
		$sql="UPDATE chitietsach SET "
		.	"NXB='".$_POST['nhaxuatban']."', "
		.	"KichThuoc='".$_POST['kichthuoc']."', "
		.	"TrongLuong='".$_POST['trongluong']."', "
		.	"SoTrang='".(int)$_POST['sotrang']."', "
		.	"DanhMuc='".$_POST['danhmuc']."', "
		.	"NgayPhatHanh='".$_POST['ngayphathanh']."', "
		.	"SoLuongTon='".(int)$_POST['soluongton']."', "
		.	"NoiDungGioiThieu='".$_POST['noidunggioithieusach']."' "
		.	"WHERE MaSach='".$_POST['masach']."'";
		DataProvider::executeQuery($sql);
		
	}
		
	//------------------------Quay ve trang quanlysanpham.php-----------------------------------------------//
	
	$hostName=$_SERVER['HTTP_HOST'];
	$dirURL=rtrim(dirname($_SERVER['PHP_SELF']));
	$pageName="quanlysanpham.php";
	$url="http://".$hostName.$dirURL."/".$pageName;
	header("Location:$url");
	exit;
?>