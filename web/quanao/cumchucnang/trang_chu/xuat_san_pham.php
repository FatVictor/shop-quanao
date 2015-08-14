<?php 
	chong_pha_hoai();
?>
<?php 
	//include_file_2("web/quanao/cumchucnang/san_pham/xuat_2.php");
?>
<div style="height:4px;weight:5px;overflow:hidden"></div>
<?php
chong_pha_hoai();
//$chuoi=chuoi_union_dulieu(26,"dulieu");
//echo $chuoi."<hr>";
//bat_loi();
//echo "chao <hr><hr><hr><hr><hr><hr><hr><hr><hr>";



//die($chuoi_union);
//echo $chuoi_union."<hr>";

	function title_hhh($id)
	{
		$sql="select * from menu where id in ('$id')";
		$q_sql=mysql_query($sql);
		$r_sql=mysql_fetch_array($q_sql);
		return $r_sql['ten'];
	}


function xuat_p52($id_re_15,$base_url)
{

$sap_xep="id desc";
//$chuoi_union=chuoi_union_dulieu($_GET['id_menu'],"dulieu");

$chuoi_union=chuoi_union_dulieu_2($id_re_15,"dulieu",$sap_xep);

	$sd=1;
	$so_du_lieu_tren_1_dong=3;
	$so_gioi_han=$sd*$so_du_lieu_tren_1_dong;
	if($_GET['trang']=="")
	{
		$vtbd=0;
	}
	else
	{
		$vtbd=($_GET['trang']-1)*$so_gioi_han;
	}
	//$sql="select * from dulieu where thuoc_menu in ('$_GET[id_menu]') order by id desc limit $vtbd,$so_gioi_han";
	$sql="$chuoi_union limit $vtbd,$so_gioi_han";
	$q_sql=mysql_query($sql);
?>
<?php
	$title=title_hhh($id_re_15);
?>
<?php
	$tv_ppp="select * from menu_ngang order by id";
	$tv_ppp_1=mysql_query($tv_ppp);
	while($tv_ppp_2=mysql_fetch_array($tv_ppp_1))
	{
		$loai_menu_ppp=$tv_ppp_2['loai'];
		if($loai_menu_ppp=="toanbo_sanpham")
		{
			$id_ppp=$tv_ppp_2['id'];
			break;
		}
	}
?>
<div class="headboxpro"><a href='<?php echo $base_url; ?>?thamso=xuat_sanpham&id_menu=<?php echo $id_re_15; ?>&id_active_mnd=<?php echo $id_re_15; ?>' ><?php echo $title; ?></a>

</div>

<div class="bodyboxpro">


	
	<div style="clear:both"></div>

			<?php
			while($r_sql=mysql_fetch_array($q_sql))
			{
				for($i=1;$i<=$so_du_lieu_tren_1_dong;$i++)
				{
					if($i!=1)
					{
						$r_sql=mysql_fetch_array($q_sql);
					}
					$id_sp=$r_sql['id'];
					$link_chi_tiet=$base_url."?thamso=chitiet_sanpham&id_chitiet=$r_sql[id]&id_active_mnd=$r_sql[thuoc_menu]";
					if($r_sql['tieu_de']!="")
					{
						//echo $r_sql['loai_gia'];
						if($r_sql['loai_gia']!="lien_he")
						{
							$gia=$r_sql['gia'];
							$gia_1=number_format($gia,0,",",",");
							$don_vi_tien="VNĐ";
						}
						else
						{
							$gia="Liên hệ";
							$gia_1=$gia;
							$don_vi_tien="";
						}
						if($r_sql[hinh_anh]!="")
						{
							$link_hinh=$base_url."hinhanh_flash/sanpham/$r_sql[hinh_anh]";
						}
						else
						{
							$link_hinh=$base_url."hinhanh_flash/dungchung/kep_toc.gif";
						}
						if($r_sql['tieu_de']!="")
						{
							?>
                            	<div id="P431" class="prohome grid">
<div class="div_img">
<a class="tooltip" href="<?php echo $link_chi_tiet ?>">
<img src="<?php echo $link_hinh ?>" alt="<?php echo $r_sql['tieu_de']?>" />
</a></div>
<a class="productname tooltip" href="<?php echo $link_chi_tiet ?>"><?php echo $r_sql['tieu_de']?></a>
<div class="price"><div class="gia"><span>Giá bán:</span> <?php echo $gia_1?> đ</div></div>
<div class="dathang"><div class="order"><a href="<?php echo $base_url;?>?thamso=giohang_xuly_session&id=<?php echo $id_sp?>" title="<?php echo $r_sql['tieu_de']?>">Đặt mua</a></div>
<div class="detail"><a href="<?php echo $link_chi_tiet ?>" title="<?php echo $r_sql['tieu_de']?>">Chi tiết</a></div>
</div><pre class="hidden"><div class="boxpro">
<div class="proname"><?php echo $r_sql['tieu_de']?></div><div class="proimg1">
<a href=""><img src="<?php echo $link_hinh ?>" align = "center" /></a></div>
<div class="clear"></div>
<div class="contentpro"></div><div class="teaser"></div></div></pre></div>


							<?php
						}
					}
				}
			}
			?>



</div>	
<div class="clear"></div>

					
<?php 
}

$f="select * from menu where thuoc_menu='' order by id limit 0,5 ";
$f_1=mysql_query($f);
while($f_2=mysql_fetch_array($f_1))
{
	xuat_p52($f_2['id'],$base_url);
}
?>











