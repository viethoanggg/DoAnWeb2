<?php
session_start();
require('common.php');
	if(isLogined()==true)
	{
		if($_SESSION['login']['MaQuyen'] == "2" )
		{
				header("Location:admin.php");
		}
		else if(kiemtramatkhau()==false)
		{
				header("Location:doimatkhauNV.php?MaNhanVien=".$_SESSION['login']['MaNhanVien']."&loitrangthai=1");
		}
		else if(kiemtraxacnhanmatkhau()==false)
		{
			header("Location:doimatkhauNV.php?MaNhanVien=".$_SESSION['login']['MaNhanVien']."&loitrangthai=2");
		}
		else 
		{
					//------------------------Sua trong database khachhang-----------------------------------------------//
				
					$sql="UPDATE nhanvien SET "	
					.	"MatKhau='".$_POST['mkmoi']."'  "
					.	"WHERE MaNhanVien='".$_SESSION['login']['MaNhanVien']."'";
					DataProvider::executeQuery($sql);
					
					$_SESSION['login']=array(	'TenDangNhap' => $_SESSION['login']['TenDangNhap'],
												'MaQuyen' => $_SESSION['login']['MaQuyen'],
												'TrangThai' => $_SESSION['login']['TrangThai'],
												'HoTen' => $_SESSION['login']['HoTen'],
												'MaNhanVien' => $_SESSION['login']['MaNhanVien'],
												'Email' => $_SESSION['login']['Email'],
												'SĐT' => $_SESSION['login']['SĐT'],
												'MatKhau' => $_POST['mkmoi']);
				
				header("Location:thongtincanhanAdmin.php");
				//echo "alert('Đổi mật khẩu thành công')";
		}
		
	}
	else if(isLogined()==false)
	{
			header("Location:admin.php");
	}
	
	
	function kiemtramatkhau()
	{
		require('DataProvider.php');
		$matkhau=$_POST['mkcu'];
		$matkhaumoi=$_POST['mkmoi'];
		$xacnhanmk=$_POST['xacnhanmkmoi'];

		$sql="select * from nhanvien where MaNhanVien ='".$_SESSION['login']['MaNhanVien']."'";
		$result=DataProvider::executeQuery($sql);
		if(mysqli_num_rows($result)==1)
		{
			$row=mysqli_fetch_array($result);
			if($_POST['mkcu']!=$matkhau)
			{						  
				return false;
			}		
		}
		return true;
	}
	function kiemtraxacnhanmatkhau()
	{
		//require('DataProvider.php');
		$matkhau=$_POST['mkcu'];
		$matkhaumoi=$_POST['mkmoi'];
		$xacnhanmk=$_POST['xacnhanmkmoi'];

		$sql="select * from nhanvien where MaNhanVien ='".$_SESSION['login']['MaNhanVien']."'";
		$result=DataProvider::executeQuery($sql);
		if(mysqli_num_rows($result)==1)
		{
			$row=mysqli_fetch_array($result);
			if($_POST['mkcu']==$matkhau && $matkhaumoi!=$xacnhanmk)
			{
				return false;
			}
		}
		return true;
	}
	
?>