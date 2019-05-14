<?php 
	/**
	 * 
	 */
	class Chitiet 
	{
		
		public static function ChitietHD($MaKH)
		{
			$s="";
			require 'DataProvider.php';
			$sql="SELECT * FROM `hoadon` WHERE MAKH='".$MaKH."'";
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
				<td><a href="#">
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
	}
	?>