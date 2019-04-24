<?php


class Bill 
{
	public static function showBill()
	{
		require('DataProvider.php');
		
		
							//  Đếm số lượng hóa đơn 
							$sql="select COUNT(*) as numRows from hoadon";
							$result=DataProvider::executeQuery($sql);
							$row=mysqli_fetch_array($result);
							$numRows=$row['numRows'];
							
							//  Xác định số hóa đơn tối đa hiện lên trong 1 trang
							$rowsPerPage=10;
							
							//  Lấy số trang hiện hành
							$pageNum=1;
							if(isset($_GET['page']))
							{
								$pageNum=$_GET['page'];
							}
							
							//  Lấy sản phẩm trong 1 trang
							$offset=($pageNum-1)*$rowsPerPage;
							$sql="select * from hoadon hd, khachhang kh  where hd.MaKH=kh.MaKH LIMIT ".$offset.",".$rowsPerPage;
							
							//  Tính tổng số trang sẽ hiện thị
							$maxPage=ceil($numRows/$rowsPerPage);
							
							//  Lấy link của trang
							$sefl="quanlyhoadon.php?page=";
							$nav="";
							
							for($page=1;$page<=$maxPage;$page++)
							{
								if($maxPage>=10 && $page>=$pageNum-2 && $page<=$pageNum+2)
								{
									if($page==$pageNum-2 && $page>1)
										$nav=$nav."<li><span>...</span></li>";
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
									if($page==$pageNum+2 && $page<$maxPage)
										$nav=$nav."<li><span>...</span></li>";
								}
								else if($maxPage<10)
								{
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
								}
							}
							
							if($pageNum>1)
							{
								$page=$pageNum-1;
								$prev="<li><a href='".$sefl.$page."'><i class='fa fa-angle-left fa-fw'></i></a></li>";
								$first="<li><a href='".$sefl."1'><i class='fa fa-angle-double-left fa-fw'></i></a></li>";
							}
							else
							{
								$prev="";
								$first="";
							}

							if($pageNum<$maxPage)
							{
								$page=$pageNum+1;
								$next="<li><a href='".$sefl.$page."'><i class='fa fa-angle-right fa-fw'></i></a></li>";
								$last="<li><a href='".$sefl.$maxPage."'><i class='fa fa-angle-double-right fa-fw'></i></a></li>";
							}
							else
							{
								$next="";
								$last="";
							}		
							
							//  Hiện sản phẩm
							$result=DataProvider::executeQuery($sql);
							$i=1;
							
							$s="<div class='table-responsive'>
										<table class='table table-striped table-bordered table-hover'>
											<thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Mã hóa đơn</th>
                                                    <th>Mã khách hàng</th>
                                                    <th>Tên khách hàng</th>
                                                    <th>Ngày đặt hàng</th>
													<th>Số lượng</th>
													<th>Tổng tiền</th>
													<th>Tình trạng</th>
													<th>Xem chi tiết HD</th>
													<th>Xóa hóa đơn</th>
                                                </tr>
											</thead>
											<tbody>";
							while($row=mysqli_fetch_array($result))
							{
								$s=$s. "<tr>"
										."<td>".$i."</td>"
										."<td>".$row['MaHD']."</td>"
										."<td>".$row['MaKH']."</td>"
										."<td>".$row['HoTen']."</td>"
										."<td>".$row['NgayDatHang']."</td>"
										."<td>".$row['TongSoLuong']."</td>"
										."<td>".$row['TongTien']."</td>"
										."<td>".$row['TinhTrang']."</td>"
										."<td><a href='showDetailBill.php?MaHD=".$row['MaHD']."&MaKH=".$row['MaKH']."'><i class='fa fa-table fa-fw'></i> Xem</a></td>"
										."<td><font style='color:#337ab7;cursor:pointer'><i class='fa fa-trash fa-fw'></i> Xóa</font><input type='hidden' value='".$row['MaHD']."'></td>"
										."</tr>";
								$i++;
							}
							
							$s=$s.			"</tbody>"
										."</table>"
									."</div>";
												
							
							echo $s;
							//  In phân trang
							echo "<center>
											<div id='phantrang' style='clear:both'>
												<ul class='pagination'>".$first.$prev.$nav.$next.$last."</ul>
											</div>
								</center>";
									
							
	}//--------	------------------------------------------------------------------------------------------//
public static function showDetailBill()
	{
		//require('DataProvider.php');
		
					if(isset($_GET['MaHD']) && isset($_GET['MaKH']))
					{		//  Đếm số lượng hóa đơn 
							$sql="select COUNT(*) as numRows from chitiethoadon where MaHD='".$_GET['MaHD']."'";
							$result=DataProvider::executeQuery($sql);
							$row=mysqli_fetch_array($result);
							$numRows=$row['numRows'];
							
							//  Xác định số hóa đơn tối đa hiện lên trong 1 trang
							$rowsPerPage=10;
							
							//  Lấy số trang hiện hành
							$pageNum=1;
							if(isset($_GET['page']))
							{
								$pageNum=$_GET['page'];
							}
							
							//  Lấy sản phẩm trong 1 trang
							$offset=($pageNum-1)*$rowsPerPage;
							$sql="select * from hoadon hd, khachhang kh,chitiethoadon ct,sach s where hd.MaKH=kh.MaKH and hd.MaHD=ct.MaHD and ct.MaSach=s.MaSach and ct.MaHD='".$_GET['MaHD']."' LIMIT ".$offset.",".$rowsPerPage;
							
							//  Tính tổng số trang sẽ hiện thị
							$maxPage=ceil($numRows/$rowsPerPage);
							
							//  Lấy link của trang
							$sefl="showDetailBill.php?MaHD=".$_GET['MaHD']."&MaKH=".$_GET['MaHD']."page=";
							$nav="";
							
							for($page=1;$page<=$maxPage;$page++)
							{
								if($maxPage>=10 && $page>=$pageNum-2 && $page<=$pageNum+2)
								{
									if($page==$pageNum-2 && $page>1)
										$nav=$nav."<li><span>...</span></li>";
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
									if($page==$pageNum+2 && $page<$maxPage)
										$nav=$nav."<li><span>...</span></li>";
								}
								else if($maxPage<10)
								{
									if($page==$pageNum)
										$nav=$nav."<li class='active'><span>". $page."</span></li>";
									else
										$nav=$nav."<li><a href='".$sefl.$page."'>". $page."</a></li>";
								}
							}
							
							if($pageNum>1)
							{
								$page=$pageNum-1;
								$prev="<li><a href='".$sefl.$page."'><i class='fa fa-angle-left fa-fw'></i></a></li>";
								$first="<li><a href='".$sefl."1'><i class='fa fa-angle-double-left fa-fw'></i></a></li>";
							}
							else
							{
								$prev="";
								$first="";
							}

							if($pageNum<$maxPage)
							{
								$page=$pageNum+1;
								$next="<li><a href='".$sefl.$page."'><i class='fa fa-angle-right fa-fw'></i></a></li>";
								$last="<li><a href='".$sefl.$maxPage."'><i class='fa fa-angle-double-right fa-fw'></i></a></li>";
							}
							else
							{
								$next="";
								$last="";
							}		
							
							//  Hiện sản phẩm
							$result=DataProvider::executeQuery($sql);
							$i=1;
							
							$s="<div class='table-responsive'>
										<table class='table table-striped table-bordered table-hover'>
											<thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Mã hóa đơn</th>
                                                    <th>Mã sách</th>
                                                    <th>Tên sách</th>
                                                    <th>Ngày giao hàng</th>
													<th>Số lượng</th>
													<th>Tổng tiền</th>
													<th>Tình trạng</th>													
													<th>Xóa chi tiết HD</th>
                                                </tr>
											</thead>
											<tbody>";
							while($row=mysqli_fetch_array($result))
							{
								$s=$s. "<tr>"
										."<td>".$i."</td>"
										."<td>".$row['MaHD']."</td>"
										."<td>".$row['MaSach']."</td>"
										."<td>".$row['TenSach']."</td>"
										."<td>".$row['NgayGiaoHang']."</td>"
										."<td>".$row['SoLuong']."</td>"
										."<td>".$row['TongTienCT']."</td>"
										."<td><select name='tinhtrangcthd' onchange='capnhathoadon(this.value)'>"
											."<option value='MaHD=".$row['MaHD']."&MaSach=".$row['MaSach']."&tinhtrang=".$row['TinhTrangCT']."'"; if($row['TinhTrangCT']=="Hàng đang nhập từ kho") $s=$s."selected" ; $s=$s.">Hàng đang nhập từ kho</option>"
											."<option value='MaHD=".$row['MaHD']."&MaSach=".$row['MaSach']."&tinhtrang=".$row['TinhTrangCT']."'"; if($row['TinhTrangCT']=="Đã giao hàng") $s=$s."selected" ; $s=$s.">Đã giao hàng</option>"
											."</select>"
											."<input type='hidden' name='MaHD' id='mhd' value='".$row['MaHD']."'>"
											."<input type='hidden' name='MaSach' id='ms' value='".$row['MaSach']."'>"
										."</td>"
										."<td><font style='color:#337ab7;cursor:pointer'><i class='fa fa-trash fa-fw'></i> Xóa</font><input type='hidden' value='".$row['MaHD']."'></td>"
										."</tr>";
								$i++;
							}
							
							$s=$s.			"</tbody>"
										."</table>"
									."</div>";
												
							
							echo $s;
							//  In phân trang
							echo "<center>
											<div id='phantrang' style='clear:both'>
												<ul class='pagination'>".$first.$prev.$nav.$next.$last."</ul>
											</div>
								</center>";
									
					}		
	}//--------	------------------------------------------------------------------------------------------//
}

?>
<script>
	$('#tinhtrang').click(function(){
		alert($(this).val());
	});
</script>