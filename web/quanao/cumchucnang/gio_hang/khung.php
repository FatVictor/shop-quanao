<?php 
	chong_pha_hoai();
?>
<?php 
	include("web/quanao/cumchucnang/bien.php");
?>
<?php 
	$tonglon=0;
	for($i=0;$i<count($_SESSION['id_giohang']);$i++)
	{
		$sl=$_SESSION['soluong_giohang'][$i];
		$id=$_SESSION['id_giohang'][$i];
		if($sl!=0)
		{
			$truyvan="select * from dulieu where id in ('$id')";
			$truyvan_1=mysql_query($truyvan);
			$truyvan_2=mysql_fetch_array($truyvan_1);
			$gia=$truyvan_2['gia'];
			$tong=$sl*$gia;
			$tonglon=$tonglon+$tong;
		}
	}
	$tonglon_1=number_format($tonglon,0,",",".");
?>
<div class="headright">Giỏ hàng</div>
<div class="midright">
<table>
<tr>
<td><img src="<?php echo $thu_muc_skin; ?>/images/ico-tongcong.gif" style="border: 0px" /></td>
<td class="cardtotal">Tổng cộng: <?php echo $tonglon_1; ?> VNĐ</td>
</tr>
<tr>
<td colspan="2" align="left" style="padding-left: 30px">
    <a id="u_control1_ctl00_u_pro_Giohang1_lbtXemgiohang" class="xemcard" href="<?php echo $base_url; ?>?thamso=gio_hang">Xem giỏ hàng</a></td>
</tr>
<tr>
<td colspan="2" align="left" style="padding-left: 30px">
    <a id="u_control1_ctl00_u_pro_Giohang1_lbtThanhtoan" class="xemcard" href="<?php echo $base_url; ?>?thamso=gio_hang">Thanh toán</a></td>
</tr>
</table>
</div>
<div class="bottomright"></div>