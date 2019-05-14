<?php 
	/**
	 * 
	 */
	class Chitiet 
	{
		
		public static function ChitietHD($MaKH)
		{
			$s="";
			$sql="SELECT * FROM `hoadon` WHERE MAKH='".$MaKH."' ORDER BY `hoadon`.`NgayDatHang` ASC";
			$result=DataProvider::executeQuery($sql);
			while ($row=mysqli_fetch_array($result)) {
				if($row['HinhThucThanhToan']==1){
					$httt="Thẻ ngân hàng";
				}
				if($row['HinhThucThanhToan']==2){
					$httt="Thẻ...";
				}
				if($row['HinhThucThanhToan']==3){
					$httt="Thanh toán khi nhận hàng";
				}
				if($row['HinhThucGiaoHang']==1){
					$htgh="Giao hàng bình thường";
				}
				if($row['HinhThucGiaoHang']==2){
					$htgh="Giao hàng nhanh";
				}
				$x='<span class="glyphicon glyphicon-ok"></span>';
				if($row['TinhTrang']=="Chưa thanh toán xong"){
					$x='<button type="submit" class="btn btn-danger" id="'.$row['MaHD'].'" onclick="hd(`'.$row['MaHD'].'`)">Xoá</button>';
				}
				$s=$s.'<tr>
				<td>'.$x.'</td>
				<td><a href="chitiethd.php?MaHD='.$row['MaHD'].'&MaKH='.$row['MaKH'].'">
				<span class="glyphicon glyphicon-list-alt"></span>
				</a></td>
				<td>'.$row['MaHD'].'</td>
				<td>'.$row['NgayDatHang'].'</td>
				<td>'.$row['DiaChi'].'</td>
				<td>'.$httt.'</td>
				<td>'.$htgh.'</td>
				<td>'.$row['TongSoLuong'].'</td>
				<td>'.$row['TongTien'].'</td>
				<td>'.$row['TinhTrang'].'</td> 
				</tr>'	;
			}
			return $s;
		}
		public static function KTKH($MaKH){
			require 'DataProvider.php';
			$sql="SELECT MAKH FROM `hoadon` WHERE MAKH='".$MaKH."'";
			$result=DataProvider::executeQuery($sql);
			$row=mysqli_fetch_array($result);
			if(empty($row)){
				return 0;
			}
			return 1;
		}
		public static function thongtinchitiet($MaHD){
			$s="";
			$sql="SELECT `MATHELOAI`,`TENSACH`,`HinhAnh`,`SoLuong`,`Gia`,`TongTienCT` FROM `chitiethoadon`,`sach` WHERE `chitiethoadon`.`MaSach`=`sach`.`MaSach` AND MAHD='".$MaHD."'";
			echo "<pre/>";
			$result=DataProvider::executeQuery($sql);
			while ($row=mysqli_fetch_array($result)) {
				var_dump($row);
				$s=$s.'<tr>
				<td>'.$row["MATHELOAI"].'</td>
				<td>'.$row["TENSACH"].'</td>
				<td>'.$row["Gia"].'</td>
				<td>'.$row["SoLuong"].'</td>
				<td>'.$row["TongTienCT"].'</td>
				</tr>';
			}
			return $s;

		}
		public static function KTHD($MaHD){
			require 'DataProvider.php';
			$sql="SELECT MAHD FROM `hoadon` WHERE MAHD='".$MaHD."'";
			$result=DataProvider::executeQuery($sql);
			$row=mysqli_fetch_array($result);
			if(!empty($row)){
				return 1;
			}
			return 0;
		}
	}
	?>