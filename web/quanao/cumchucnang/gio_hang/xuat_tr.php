<?php 
	chong_pha_hoai();
?>
<style>



</style>
<?php
	//print_r($_SESSION['soluong_giohang']);
	//print_r($_SESSION['id_giohang']);
	for($i=0;$i<count($_SESSION['id_giohang']);$i++)
	{
		$j=$i+1;
		$sl=$_SESSION['soluong_giohang'][$i];
		//echo $i." \$i <br>";
		//echo $sl." \$sl <br>";
		$id=$_SESSION['id_giohang'][$i];

		if($sl!=0)
		{
			$truyvan="select * from dulieu where id in ('$id')";
			$truyvan_1=mysql_query($truyvan);
			$truyvan_2=mysql_fetch_array($truyvan_1);

			$gia=$truyvan_2['gia'];
			$gia_1=number_format($gia,0,",",".");
			$tong=$sl*$gia;
			$tong_1=number_format($tong,0,",",".");
			$ten_sp=$truyvan_2['tieu_de'];
			$link=$base_url."?thamso=chitiet_sanpham&id_chitiet=$id";
?>
			<tr class="tr_p27" >
				<td align="center" height="25px"><?php echo $j; ?></td>
				<td align="left">
					<!--<a href="<?php //echo $link; ?>"><?php //echo $ten_sp; ?></a>-->
                    <span style="margin-left:3px"><?php echo $ten_sp; ?></span>
				</td>
				<td align="center">
					<input name="soluong_<?php echo $i; ?>" value="<?php echo $sl; ?>" type="text" style="width:50px;" />
				</td>
				<td align="right">
					<span style="margin-right:3px" ><?php echo $gia_1; ?></span>
				</td>
				<td align="right">
					<span style="color:red;margin-right:3px" ><?php echo $tong_1; ?></a>
				</td>
			</tr>
<?php
			$tonglon=$tonglon+$tong;
		}

	}
	$tonglon_1=number_format($tonglon,0,",",".");
?>
			<tr class="tr_p27">
				<td colspan="4" align="right" height="25px"><span style="margin-right:3px">Tổng giá trị đơn hàng</span></td>
				<td align="right"><span style="color:red;margin-right:3px"><?php echo $tonglon_1; ?></span></td>
			</tr>