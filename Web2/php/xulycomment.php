<?php
	session_start();
	require('common.php');
	if(isLogined()==true)
	{
		if(kiemtracmt()==true)
		{
			echo"<script>
				document.getElementById('cmt').disabled=false;
				document.getElementById('btnCmt').disabled=false;
			</script>";
			header("Location:sanpham.php");
		}
		
	}
	
	
	function kiemtracmt()
	{
		require('DataProvider.php');
		$sql="select * from comment where MaKH='".$_SESSION['login']['MaKH']."'";
		$result=DataProvider::executeQuery($sql);
		if(mysqli_num_rows($result)==1)
		{
			$MaSach=$_GET['masach'];
			$CMT=$_GET['cmtarea'];
			$row=mysqli_fetch_array($result);
			if($row['MaSach']==$MaSach)
			{
				$sql="update comment set NoiDungCMT='".$CMT."'";
				DataProvider::executeQuery($sql);
				return true;
			}
			return false;
			
		}
		
	}
?>