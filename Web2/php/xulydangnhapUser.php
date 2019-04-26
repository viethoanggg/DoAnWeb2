<?php
	session_start();
	
	if(isset($_REQUEST['dangnhap']) && $_REQUEST['dangnhap']=="1")
	{
		if(login()==true)
		{
			header("Location:../index.php");
		}
		else
		{
			header("Location:DangNhap.php?loidangnhap=1");
		}
	}
	else if(isset($_REQUEST['dangxuat']) && $_REQUEST['dangxuat']=="1")
	{
		$_SESSION['login']= NULL;
		header("Location:DangNhap.php");
	}
	
	function login()
	{
		
		require('DataProvider.php');
		$tendangnhap=$_POST['tendangnhap'];
		$matkhau=$_POST['matkhau'];
		
		$sql="select * from khachhang where TenDangNhap='".$tendangnhap."'";
		$result=DataProvider::executeQuery($sql);
		if(mysqli_num_rows($result)==1)
		{
			$row=mysqli_fetch_array($result);
			if($row['MatKhau']==$matkhau)
			{
				$_SESSION['login']=array('TenDangNhap' => $tendangnhap,
										  
										  'MaKH' => $row['MaKH']);
				return true;
			}
		}
		return false;
			
	}
?>