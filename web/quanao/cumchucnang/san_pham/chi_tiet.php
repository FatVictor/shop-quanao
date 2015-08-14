<?php
chong_pha_hoai();
//bat_loi();
class class__update_show_nhieu_anh{
	function show($mang,$base_url,$link_hinh_2)
	{
		//echo "chao <hr>";
		$id=$mang['id'];
		$mang_nhieu_hinh=explode("____",$mang['nhieu_hinh_anh']);
		//print_r($mang_nhieu_hinh);echo "<hr>";
		$hinh_100=5;
		if($mang['nhieu_hinh_anh']!="")
		{
			echo '<div class="product-thumbnail"><ul class="imageslider noSlide">';
			echo '<li ><div>
	<table><tr><td><a href="'.$link_hinh_2.'" rel="lightbox[roadtrip]" ><img src="'.$link_hinh_2.'" alt="" /></a></td></tr></table>
    </div></li>';
			?>


							<?php
								for($i=0;$i<count($mang_nhieu_hinh);$i++)
								{
									$link_hinh=$base_url."hinhanh_flash/sanpham/$id/$mang_nhieu_hinh[$i]";

										if(trim($mang_nhieu_hinh[$i])!="")
										{
											//echo "<a href=\"$link_hinh\" rel=\"lightbox[plants]\">";
												//echo "<img src=\"$link_hinh\" class=\"rel_iii_3\">";
											//echo "</a>";
											echo '<li><div>
	<table><tr><td><a href="'.$link_hinh.'" rel="lightbox[roadtrip]" ><img src="'.$link_hinh.'" alt="" /></a></td></tr></table>
    </div></li>';
										}
										else
										{
											echo "&nbsp";
										}
		
									
								}
							?>
	

			<?php
			echo ' </ul><div id="gallery-controls"></div></div>';
		}

	}
}
class class__chitiet_sanpham
{
	function tim_id_menu($id)
	{
		$tv="select * from dulieu where id in ('$id')";
		$tv_1=mysql_query($tv);
		$tv_2=mysql_fetch_array($tv_1);
		$id_menu=$tv_2['thuoc_menu'];
		return $id_menu;
	}
	function title()
	{
		$id_menu=$this->tim_id_menu($_GET['id_chitiet']);
		$sql="select * from menu where id in ('$id_menu')";
		$q_sql=mysql_query($sql);
		$r_sql=mysql_fetch_array($q_sql);
		return $r_sql['ten'];
	}
}
$class__chitiet_sanpham=new class__chitiet_sanpham;
?>
<?php
	$title=$class__chitiet_sanpham->title();
?>
<?php
	$id_sp=$_GET['id_chitiet'];
	//echo $id_sp;

	$sql_10="select * from dulieu where id in ('$id_sp')";
	$q__sql_10=mysql_query($sql_10);
	$r__sql_10=mysql_fetch_array($q__sql_10);
	$id_menu=$r__sql_10['thuoc_menu'];
	if($r__sql_10['loai_gia']!="lien_he")
	{
		$gia=$r__sql_10['gia'];
		$gia_1=number_format($gia,0,",",".");
		$don_vi_tien="VNĐ";
	}
	else
	{
		$gia="Liên hệ";
		$gia_1=$gia;
		$don_vi_tien="";
	}
	$link_hien_tai=$base_url."?thamso=chitiet_sanpham&id_chitiet=$_GET[id_chitiet]";
	$link_hinh=$base_url."hinhanh_flash/sanpham/$r__sql_10[hinh_anh]";
	//echo $link_hinh;
	$c_tin_lien_quan="select * from dulieu where thuoc_menu in ('$id_menu') and id<$id_sp order by id desc limit 0,6";
	//thongbao("$c_tin_lien_quan");
	$tin_lien_quan=mysql_query($c_tin_lien_quan);
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
<script type="text/javascript">
	function ham_jjj()
	{
		//alert("ads");
		//$(this).lightBox();
		$('.imageslider a').lightBox();
		//voild(0);
	}
</script>
<style>
a.p89{color:white;}
a.p89:hover{color:white;}
</style>
<div class="headboxpro"><a href='javascript:voild(0)' ><?php echo $title; ?></a></div>
<div class="bodyboxpro">

<div class="prodetail">
<div class="proleftdet">
<div class="img-box">
	<a href="<?php echo $link_hinh;?>" title="<?php echo $r__sql_10['tieu_de']?>" class="bbb_8" rel="lightbox[roadtrip]">
    	<img id="mainImg" src="<?php echo $link_hinh;?>" />
    </a>
</div>

<?php
	$class__update_show_nhieu_anh=new class__update_show_nhieu_anh();
	$class__update_show_nhieu_anh->show($r__sql_10,$base_url,$link_hinh);
	///////////////////
?>

   
</div>
<div class="prodetailright">
<div class="proname"><?php echo $r__sql_10['tieu_de']?></div>
<?php if(trim($r__sql_10['mo_ta_ngan'])!=""){echo $r__sql_10['mo_ta_ngan'].'<br>';} ?>
<?php //if(trim($r__sql_10['hang_san_xuat'])!=""){echo '<p><strong>Hãng sản xuất:</strong> '.$r__sql_10['hang_san_xuat'].'</p>';} ?>
<?php //if(trim($r__sql_10['nam_san_xuat'])!=""){echo '<p><strong>Năm sản xuất:</strong> '.$r__sql_10['nam_san_xuat'].'</p>';} ?>


 <div class="proPrice"><span>Giá bán:</span> <?php echo $gia_1;?> đ</div>  
<div class="detailpro"><a href="<?php echo $base_url;?>?thamso=giohang_xuly_session&id=<?php echo $_GET['id_chitiet'];?>" class="p89">Đặt mua</a></div>
</div>
<div class="clear"></div>
</div>

<script type="text/javascript"> $(".imageslider").bxSlider({ auto: false, prevText: "", nextText: "", pause: 3e3, pager: false, minSlides: 4, maxSlides: 4, slideWidth: 50, infiniteLoop: false, nextSelector: "#gallery-controls", prevSelector: "#gallery-controls" }); $(".imageslider a").hover(function () { var e = $(this).attr("href"); $("#mainImg").attr("src", e); $("#mainImg").parent().attr("href", e) }); </script>
<div class="mieutasp">Mô tả chi tiết</div>
<div class="contentpro">
<?php echo $r__sql_10['noi_dung'];?>
</div>


</div> <!-- #prodetail -->

<?php 
class class__xuat_sanpham
{
	function title()
	{
		$sql="select * from menu where id in ('$_GET[id_menu]')";
		$q_sql=mysql_query($sql);
		$r_sql=mysql_fetch_array($q_sql);
		return $r_sql['ten'];
	}
}
$class__xuat_sanpham=new class__xuat_sanpham;
class phantrang_xuatlink
{
	function link_789($base_url)
	{
		$full_url=full_url();
		$m=explode("&trang",$full_url);
		if(count($m)!=1)
		{
			$link=$m[0];
		}
		else 
		{
			$link=$full_url;
		}
		return $link;
	}
	function trang_truoc($base_url)
	{
		$link_789=$this->link_789($base_url);	
		if($_GET['trang']=="" or $_GET['trang']==1){$a=1;}else{$a=($_GET['trang']-1);}
		echo "<span>";
		echo "<a href=\"$link_789"."&trang=$a\">";
			echo "Trang trước ";
		echo "</a>";
		echo "</span>";
	}
	function trang_sau($st,$base_url)
	{
		$link_789=$this->link_789($base_url);
		if($_GET['trang']==$st){$a=$st;}else{$a=($_GET['trang']+1);}
		if($_GET['trang']=="" or $_GET['trang']==1){$a=2;}
		echo "<span>";
		echo "<a href=\"$link_789"."&trang=$a\">";
			echo " Trang sau ";
		echo "</a>";
		echo "</span>";
	}
	function cham_cham_duoi($gioi_han_tren,$st,$base_url)
	{
		$link_789=$this->link_789($base_url);
		if($gioi_han_tren<$st)
		{
			$a=$st-1;
			if($a!=$gioi_han_tren)
			{
				echo "<span>";
				//echo " ... ";
				echo "</span>";
			}
			echo "<span>";
			echo "<a href=\"$link_789"."&trang=$st\">";
				echo "$st ";
			echo "</a>";
			echo "</span>";
		}
	}
	function cham_cham_tren($gioi_han_duoi,$base_url)
	{
		$link_789=$this->link_789($base_url);
		if($gioi_han_duoi>2)
		{
			echo "<span>";
			echo "<a href=\"$link_789"."&trang=1\">";
				echo "1 ";
			echo "</a>";
			//echo " ... ";
			echo "</span>";
		}
		if($gioi_han_duoi==2)
		{
			echo "<span>";
			echo "<a href=\"$link_789"."&trang=1\">";
				echo "1 ";
			echo "</a>";
			echo "</span>";
		}
	}
	function gioi_han_tren($trang_hien_tai)
	{
		$gioi_han_tren=$trang_hien_tai+4;
		if($gioi_han_tren>=5 and $gioi_han_tren<9)
		{
			$gioi_han_tren=9;
		}
		return $gioi_han_tren;
	}
	function gioi_han_duoi($trang_hien_tai,$st)
	{
		$cao_nhat=$st-8;
		$gioi_han_duoi=$trang_hien_tai-4;
		if($gioi_han_duoi>$cao_nhat)
		{
			$gioi_han_duoi=$cao_nhat;
		}
		return $gioi_han_duoi;
	}
	function xuat_link($st,$base_url)
	{
		if($_GET['trang']==""){$trang_hien_tai=1;}else{$trang_hien_tai=$_GET['trang'];}
		$gioi_han_tren=$this->gioi_han_tren($trang_hien_tai,$base_url);
		$gioi_han_duoi=$this->gioi_han_duoi($trang_hien_tai,$st,$base_url);
		$this->trang_truoc($base_url);
		$this->cham_cham_tren($gioi_han_duoi,$base_url);
			$link_789=$this->link_789($base_url);
			for($i=$gioi_han_duoi;$i<=$gioi_han_tren;$i++)
			{
				$link_phan_trang=$link_789."&trang=$i";
				
				if($i>0 and $i<=$st)
				{
					if($i!=$trang_hien_tai)
					{
						$class_i='';
					}
					else
					{
						//echo "<span class=\"selected\">| $i | </span>";
						$class_i='class="selected"';
					}
					echo "<span $class_i >";	
					echo "<a href=\"$link_phan_trang\" rel=\"nofollow\">";
						echo "$i ";
					echo "</a>";
					echo "</span>";
				}
			}

		$this->cham_cham_duoi($gioi_han_tren,$st,$base_url);
		$this->trang_sau($st,$base_url);
	}
}
?>
<?php
	$sd=7;
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
		$c_tin_lien_quan="select * from dulieu where thuoc_menu in ('$id_menu') and id<$id_sp order by id desc limit 0,15";
	$sql=$c_tin_lien_quan;
	$q_sql=mysql_query($sql);
?>
<?php
	//$title=$class__xuat_sanpham->title();
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
<div class="headboxpro"><a href='#' >Sản phẩm cùng loại</a></div>

<div class="bodyboxpro" >


	
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
					$link_chi_tiet=$base_url."?thamso=chitiet_sanpham&id_chitiet=$r_sql[id]&id_active_mnd=$_GET[id_active_mnd]";
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
<div class="dathang"><div class="order"><a href="<?php echo $base_url; ?>?thamso=giohang_xuly_session&id=<?php echo $id_sp?>" title="<?php echo $r_sql['tieu_de']?>">Đặt mua</a></div>
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